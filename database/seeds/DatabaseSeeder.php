<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// Для того чтобы класс DatabaseSeeder мог обратиться к 
// нашей модели Article, необходимо прописать путь: 
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class); // это образец 

        // Чтобы класс ArticlesSeeder запустился, его надо
        // прописать в главном классе DatabaseSeeder, а именно в 
        // публичном методе run():
        $this->call(ArticlesSeeder::class);

        Model::reguard();
    }
}

// Добавим класс ArticlesSeeder:
class ArticlesSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->delete(); // сначала очищаем всю таблицу 

        // Создадим 3 тестовые записи. Обращаемся к модели Article, вызываем
        // метод create(), и передаём массив параметров: 

        Article::create([
            'title' => 'First Article',
            'content' => 'Content of the first article.',
            'fragment' => 'Fragment of the first article.',
            'slug' => 'first-article',
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Article::create([
            'title' => 'Second Article',
            'content' => 'Content of the second article.',
            'fragment' => 'Fragment of the second article.',
            'slug' => 'second-article',
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Article::create([
            'title' => 'Third Article',
            'content' => 'Content of the third article.',
            'fragment' => 'Fragment of the third article.',
            'slug' => 'third-article',
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}  
