<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('principal.css') }}" rel="stylesheet">
</head>
<body>
	<div id="entrada" class="text-center bg-info">
  		<h1>Patrick Rothfuss</h1>
  		<p>Las preguntas que no podemos contestar son las que más nos enseñan</p> 
	</div>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="/imagenes/icono-blog.png" alt="logo" style="width:40px;">
              </a>
              
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('Home') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('Biografia') }}">Biografía</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('Publicados') }}">Publicados</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('Sugerencias') }}">Sugerencias</a>
                </li>
              </ul>
              
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div id="footer" class="text-center p-3 bg-dark">
	<p>Propiedad de Melania Gallego Otero</p>
</div>
</body>
</html>
