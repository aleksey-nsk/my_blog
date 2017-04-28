<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Создадим маршрут, который обработает запрос 
// на отображение главной страницы проекта: 
Route::get('/', 'IndexController@index')->name('mainPage'); 

// Создадим маршрут, который обработает запрос
// на отображение отдельного поста из блога: 
Route::get('article/{id}', 'IndexController@show')->name('articleShow');
// - присвоили псевдоним 'articleShow' для данного маршрута,
// используя метод name()

// Сформируем маршрут, который обработает запрос
// на отображение страницы добавления нового поста: 
Route::get('page/add', 'IndexController@add')->name('articleAdd');

// Маршрут, который обработает запрос 
// на сохранение нового поста: 
Route::post('page/add', 'IndexController@store')->name('articleStore'); 

// Создадим маршрут, который будет обрабатывать запросы типа DELETE. 
// Прямо тут опишем код функции-обработчика данного маршрута:  
Route::delete('page/delete/{article}', function($article){ 
	
	// Убедимся что в переменной $article действительно 
	// содержится идентификатор удаляемого поста: 
	// dump($article);

	// Модель Article расположена в каталоге app
	// При обращении к модели Article используем 
	// полное квалификационное имя \App\Article 
	$article_tmp = \App\Article::where('id', $article)->first();  

	// Убедимся в том, что действительно мы сейчас
	// выбираем необходимую нам модель:  
	// dump($article_tmp); 

	// Удалим конкретную запись из БД:  
	$article_tmp->delete(); 

	// Возвращаем конкретный ответ юзеру, то есть
	// выполняем редирект на главную страницу:  
	return redirect('/'); 

})->name('articleDelete'); 
