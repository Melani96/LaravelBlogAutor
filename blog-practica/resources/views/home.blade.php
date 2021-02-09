@extends('layouts.app')

@section('content')
     
     <!-- Comprobamos que se ha iniciado session, si no es asi no nos aparecera nada.
     Si al contrario nos hemos logueado dependiendo de que usuario sea se nos aparecera unas cosas u otras -->
     @if (Auth::check())
         @if (auth()->user()->id > 1)
         <div class="contenedorIndex container">
      		<div class="entradasAutor col-sm-12">
                	<div id="contenedorIndex">
                	<h4 class="text-info text-center"><b>Entradas</b></h4>
          			@foreach ($entradas as $entra)
            			<div class="entradasAutor text-center border">
            				<p class="float-right">{{$entra->fechaCreado}}</p>
              				<p>{{$entra->entrada}}</p>
            			</div>
          			@endforeach
          			</div>
             </div>
    	</div>
    	@endif
    	
    	<!-- Si el usuario es el primero el cual es el administrador se nos dara acceso a otro contenido -->
    	@if (auth()->user()->id == 1)
    	<div class="container">
    		<div class="row">
                <div class="entradasAutor col-sm-4">
                    <div id="contenedorEntrada">
                    	<p><em class="text-primary">Introduce tu nueva entrada en el <b>blog</b>:</em></p>
                		<form method="POST" action="{{ route('Home') }}">
                			<textarea rows="8" cols="30" name="entrada"></textarea>
                			{{ csrf_field() }}
                			<br><br>
                			<input class="btn btn-success" type="submit" name="publicar" value="Publicar">
                		</form>
                    </div>
                </div>
                <div class="entradasAutor col-sm-8">
                	<div id="contenedorIndex">
                	<h4 class="text-info text-center"><b>Entradas</b></h4>
          			@foreach ($entradas as $entra)
            			<div class="entradasAutor text-center border">
            				<p class="float-right">{{$entra->fechaCreado}}</p>
              				<p>{{$entra->entrada}}</p>
            			</div>
          			@endforeach
          			</div>
                </div>
          	</div>
    	</div>
    	@endif
	@else
	<!-- Si el usuario no esta conectado se le mostrara el siguiente mensaje -->
    <div id="contenedorBiografia" class="container">
      <div class="row justify-content-center">
        <div class="entradasAutor col-sm-8 text-center">
          	<h2>Para poder ver el contenido <b>logueate</b></h2>
        </div>
      </div>
    </div>
    @endif
@endsection
