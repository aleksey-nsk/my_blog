@extends('layouts.site')
<!-- подключили наш глобальный лэйаут site (глобальный шаблон site) -->

@section('content') 
	<div class="content"> 
		@if( count($errors) > 0 )
		<div class="alert-error">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
		    </ul>
		</div>
		@endif 
		
		<div class="article"> 
			<form method="POST" action="{{ route('articleStore') }}"> 

				<div class="form-element">
					Заголовок <br>
					<input type="text" name="title" size="40">     			
				</div>

				<div class="form-element">
					Slug <br>
					<input type="text" name="slug" size="40">     			
				</div>

				<div class="form-element">
					Краткое описание <br>
					<textarea name="fragment" cols="41" rows="5"></textarea>
				</div>

				<div class="form-element">
					Полный текст <br>
					<textarea name="content" cols="41" rows="10"></textarea> 
				</div> 

				<!-- Кнопка отправки формы: -->
				<button type="submit" class="send">Добавить</button>

				{{ csrf_field() }} 

			</form>   
		</div> <!-- /article -->
	</div> <!-- /content --> 
@endsection
 