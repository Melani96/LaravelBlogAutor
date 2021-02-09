@extends('layouts.app')

@section('content')

	<!-- Comprobamos si se ha iniciado sesión, si es así se nos mostraran los datos del autor -->
	@if (Auth::check())
    <div id="contenedorBiografia" class="container">
      <div class="row justify-content-center">
      @foreach ($biografias as $resumen)
        <div class="entradasAutor col-sm-8 text-center border">
          	<p><b>Nombre:</b> {{$resumen->nombre}}</p>
          	<p><b>Apellidos:</b> {{$resumen->apellidos}}</p>
          	<p><b>Fecha de Nacimiento:</b> {{$resumen->fechaNacimiento}}</p>
          	<p><b>Ciudad Natal:</b> {{$resumen->ciudadNatal}}</p>
          	<p><b>Info:</b> {{$resumen->biografia}}</p>
        </div>
      @endforeach
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