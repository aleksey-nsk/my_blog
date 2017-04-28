<?php

namespace App\Http\Controllers; 
// - контроллеры описываются в пространстве имён App\Http\Controllers 

use Illuminate\Http\Request;
// - тут предоставляется доступ к классу Request, который по-сути
// представляет собой абстракцию отправляемого пользователем запроса

use App\Http\Requests; 
use App\Http\Controllers\Controller; 

use App\Article;
// - раз хотим работать с конкретной моделью, то надо прописать 
// доступ к ней. Теперь можем обращаться к классу Article 

class IndexController extends Controller
{
    // Объявим 2 protected-свойства данного класса: 
    protected $header;
    protected $message;

    // Создадим конструктор для данного контроллера: 
    public function __construct()
    {
        $this->header = 'Мой Блог'; 
        $this->message = 'Написан на Laravel 5.1'; 
    }

    // Метод index обрабатывает запрос на отображение
    // главной странички проекта: 
    public function index() 
    {  
        // В переменную $articles сохраним выборку 
        // необходимой информации из таблицы 'articles': 
        $articles = Article::select(['id', 'title', 'fragment'])->get();
        
        // dump($articles); // распечатаем содержимое переменной $articles

        // Передаём в вид переменные: 
        return view('page')->with([ 'header'  => $this->header, 
                                    'message' => $this->message,
                                    'articles'=> $articles ]);
    }
     
    // Метод, который обработает запрос на отображение 
    // конкретной статьи на экране: 
    public function show($id)
    {
        // Маршрут содержит параметр {id} и значит данный параметр
        // будет передаваться в качестве аргумента при вызове текущего
        // метода show. Проверим это:
        // dump($id); 

        // В переменную $article сохраним 
        // модель выбранной записи 
        // из таблицы 'articles':                   
        $article = Article::select(['id', 'title', 'content'])->where('id', $id)->first();
        // SELECT id, title, content WHERE id = $id 

        // dump($article);

        // Передадим нужные переменные в вид: 
        return view('article-content')->with([ 'header'  => $this->header, 
                                               'message' => $this->message,
                                               'article' => $article ]); 
    }

    // Метод add должен отобразить на экране страничку с формой:  
    public function add()
    {
        // Здесь нам только лишь нужно обратиться к 
        // необходимому виду: 
        return view('add-content')->with([ 'header'  => $this->header, 
                                           'message' => $this->message ]);
    } 

    // Метод store должен реализовать действие. То есть осуществить
    // сохранение информации о новой статье в табличке 'articles':  
    public function store(Request $request)
    {
        // Переменная $request это объект
        // глобального класса Request.
        // Request это абстракция запроса, отправляемого пользователем.
        // Объект $request будет содержать данные, которые 
        // отправляются в запросе. А значит чтобы получить доступ к отправляемым 
        // данным, мы должны просто обратиться к объекту $request:
        // dump( $request->all() ); 

        // Валидация входных данных: 
        $this->validate($request, [
            'title' => 'required|max:255',
            'slug' => 'required|unique:articles,slug', 
            'content' => 'required' 
        ]); 

        // Формируем временную переменную $data, в которую
        // сохраним абсолютно все поля, которые содержатся 
        // в объекте $request, т.е это все те данные которые
        // отправляются формой: 
        $data = $request->all();
        
        // Формируем переменную $article. Сейчас
        // $article это пустая модель: 
        $article = new Article;

        // Убедимся в том что 
        // $article это пустая модель: 
        // dump($article); 

        // Заполним данную модель $article
        // свойствами (массовое заполнение):  
        $article->fill($data); 

        // Теперь модель $article уже не пустая.
        // Убедимся в этом: 
        // dump($article); 

        // Сохраним данное состояние модели: 
        $article->save(); 
        // - сохранение модели по-сути осуществляет
        // сохранение информации в БД
        
        // После сохранения инфы реализуем ответ,
        // и перенаправим юзера на главную страничку: 
        return redirect('/');          
    } 
}
