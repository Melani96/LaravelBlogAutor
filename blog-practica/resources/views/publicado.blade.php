@extends('layouts.app')

@section('content')
	
	@if (Auth::check())
        <div id="contenedorPublicados" class="contenedorIndex container">
          <div class="row justify-content-center">
          @foreach ($libros as $libro)
            <div class="entradasAutor col-sm-8 text-center border">
            	<p><a href="{{url('libro/'.$libro->idLibro.'')}}">{{$libro->titulo}}</a></p>
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