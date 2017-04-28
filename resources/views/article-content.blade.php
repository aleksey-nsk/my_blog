@extends('layouts.site')

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
