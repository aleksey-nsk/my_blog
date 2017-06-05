@extends('layouts.site')
<!-- подключили наш глобальный лэйаут site (глобальный шаблон site) -->

@section('content') 
  <div class="content"> 
        
    @if($article)       
      <div class="article">
        <h2> {{ $article->title }} </h2> 
        <p> {{ $article->content }} </p>           
      </div> 
    @endif 
    
  </div> <!-- /content --> 
@endsection 
