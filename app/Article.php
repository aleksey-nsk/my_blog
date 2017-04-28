<?php

namespace App;

// Модель Article наследует родительский класс Model
// И доступ к данному классу прописан тут: 
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	// Объявим protected-свойство $fillable и в этом свойстве
	// определяем массив со списком тех полей, для которых
	// хотим разрешить массовое заполнение: 
    protected $fillable = ['title', 'slug', 'fragment', 'content'];
}
