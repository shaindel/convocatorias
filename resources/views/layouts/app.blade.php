<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../css/welcome.css">
    <link rel="stylesheet" type="text/css" href="../../../css/header.css">
    <script src="https://use.fontawesome.com/173c788b1d.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Convocatorias') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container blue-header-nav">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-container">
                                <img src="{{ asset('images/logo.png') }}" class="logo-header" />
                        </div>
                        {{-- <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Voluntarios') }}
                        </a> --}}
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                          
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="menuRight" href="http://voluntariosmexico.org/" target="_blank"> Voluntarios México</a></li>
                            <li><a class="menuRight" href="{{ url('home') }}"> Convocatorias</a></li>
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                                <li><a href="{{ route('register') }}">Registro</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Cerrar sesión
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                        <li><a href="{{ url('perfil') }}">Actualizar perfil</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="container pink-header-nav m-right2">
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="https://www.facebook.com/voluntariosmx/" target="_blank" class="pad-right">
                                    <i class="fa fa-facebook" aria-hidden="true" style="font-size: 20px"></i>
                                </a></li>
                                <li><a href="https://twitter.com/MxVoluntarios" target="_blank" class="pad-right">
                                    <i class="fa fa-twitter" aria-hidden="true" style="font-size: 20px"></i>
                                </a></li>
                                <li><a href="https://www.youtube.com/channel/UCXCic0w2ie_uR9_jIj65o7A" target="_blank" class="pad-right">
                                    <i class="fa fa-youtube" aria-hidden="true" style="font-size: 20px"></i>
                                </a></li>
                                {{-- <li><a href="" class="pad-right">
                                    <i class="fa fa-linkedin" aria-hidden="true" style="font-size: 20px"></i>
                                </a></li>
                                <li><a href="" class="pad-right">
                                    <i class="fa fa-instagram" aria-hidden="true" style="font-size: 20px"></i>
                                </a></li> --}}
                            </ul>
                        </div>
                    </div>
            </nav>
        

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
