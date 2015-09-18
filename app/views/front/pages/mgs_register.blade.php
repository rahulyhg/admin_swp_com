@extends('master')

@section('title', 'Home ')

@section('content')
   

	<div class="jumbotron" style="position: relative; z-index: 99999999999999999999999;">
    <br>
		 <br><h2>Gracias por su Registro <span></span> ...</h2><br>
        <p id="mgs">Un correo ha sido enviado a <b>{{Session::get('email')}}</b> con detalles de como activar tu cuenta (en caso de no recibirla en su buzón de entrada, buscar en el buzón de Correo no Deseado o Spam).</p> 
        <br>
		@if (!Sentry::check())
		<p>
			<a href="{{url('/')}}" class="btn btn-success btn-lg" role="button">Login</a> 
		</p>
		@endif
	</div>

@stop