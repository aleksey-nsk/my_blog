<!DOCTYPE html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <title> My Blog </title> 
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="main_container">
      
      <div class="header"> 
        <h1> {{ $header }} </h1>
        <h3> {{ $message }} </h3>
      </div>
      
      <div class="menu">         
        <div class="menu_button"><a href="{{ route('mainPage') }}">Главная</a></div>          
        <div class="menu_button"><a href="{{ route('articleAdd') }}">Добавить пост</a></div>
        <div class="menu_button"><a href="https://github.com/aleksey-nsk/blog" target="_blank">GitHub</a></div>
        <div class="menu_button"><a href="https://laravel.ru/docs/v5/" target="_blank">Документация</a></div>          
      </div>       
      
      @yield('content')
      <!-- выводим секцию content с помощью данной команды.
      Секция content встраивается в глобальный лэйаут site
      именно в это место --> 
      
      <div class="footer">
        <a href="https://vk.com/id35880133" target="_blank">ВКонтактик</a> для связи 
      </div>
      
    </div> <!-- /main_container -->
  </body>
</html>
