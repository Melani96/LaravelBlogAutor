@extends('layouts.app')

@section('content')

<div class="card-body">
    @if (session('realizado'))
      <div class="alert alert-success text-center" role="alert">
         {{ session('realizado') }}
         @php
         Session::forget('realizado');
         @endphp
      </div>
    @endif      
</div>
	
	@if (Auth::check())
        <div class="container">
      		<div class="entradasAutor col-sm-12">
                	<div id="contenedorSugerencia">
                	<h4 class="text-info text-center"><b>Sugerencia</b></h4>
            			<div class="entradasAutor text-center">
                			<form method="POST" action="{{ url('sugerencia') }}">
                              	<p>Nombre: <input type="text" name="nombre"></p>
                              	<p>Email: <input type="text" name="email"></p>
                              	<p>Asunto: <input type="text" name="asunto"></p>
                              	<p>Mensaje: </p>
                              	<textarea rows="5" cols="50" name="mensaje"></textarea><br><br>
                              	{{ csrf_field() }}
                              	<input class="btn btn-success" type="submit" name="enviar" value="Enviar">
                          	</form>
            			</div>
          			</div>
             </div>
    	</div>
    @else
        <div id="contenedorBiografia" class="container">
          <div class="row justify-content-center">
            <div class="entradasAutor col-sm-8 text-center">
              	<h2>Para poder ver el contenido <b>logueate</b></h2>
            </div>
          </div>
        </div>
    @endif
    
@endsection