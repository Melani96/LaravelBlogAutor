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
  <div id="contenedorIndex" class="container">
   <div class="entradasAutor col-sm-12">
     <div id="contenedorIndex">
     
         @foreach ($libros as $libro)
          <div class="entradasAutor text-center border">
            <p><b>Titulo:</b> {{$libro->titulo}}</p>
            <p><b>Fecha:</b> {{$libro->fechaPublicacion}}</p>
            <p><b>Sinopsis:</b> {{$libro->sinopsis}}</p>
            <!-- Botón para el formulario de compra -->
              <button id="btnCompra" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Comprar
              </button>
            
              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Introduzca sus datos</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form method="POST" action="{{ url('libro/'.$libro->idLibro.'') }}">
                      	<p>Nombre: <input type="text" name="nombre"></p>
                      	<p>Email: <input type="text" name="email"></p>
                      	<p>Calle: <input type="text" name=calle></p>
                      	<p>C.Postal: <input type="number" name=cPostal></p>
                      	<p>Ciudad: <input type="text" name=ciudad></p>
                      	<p>Provincia: <input type="text" name=provincia></p>
                      	<input type="hidden" name="libroId" value="{{$libro->idLibro}}">
                      	{{ csrf_field() }}
                      	<input class="btn btn-success" type="submit" name="comprar" value="Comprar">
                      </form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
          </div>
         @endforeach
     </div>
    </div>
  </div>
@endif

@endsection