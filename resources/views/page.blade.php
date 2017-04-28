@extends('layouts.site')

@section('content') 
  <div class="content"> 
      @foreach($articles as $article) 
        <div class="article"> 

          <h2> {{ $article->title }} </h2> 
          <p> {{ $article->fragment }} </p>

          <div class="read"> 
            <a href="{{ route('articleShow', ['id' => $article->id]) }}">Подробнее</a> 
          </div> 

          <form action="{{ route('articleDelete', ['article' => $article->id]) }}" method="POST">             
            <!-- <input type="hidden" name="_method" value="DELETE"> -->
            {{ method_field('DELETE') }}             
            {{ csrf_field() }}             
            <button type="submit" class="delete">Удалить пост</button>
          </form> 

        </div> 
      @endforeach       
  </div> <!-- /content -->
@endsection 
