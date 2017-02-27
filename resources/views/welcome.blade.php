<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../../css/welcome.css">
        <link href="/../../../css/carousel.css" rel="stylesheet">
        <link href="../../../dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/173c788b1d.js"></script>
        {{-- <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="assets/js/ie-emulation-modes-warning.js"></script> --}}
        
        <title>Convocatorias</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container nomargin">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container blue-header-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <div class="logo-container">
                                <img class="logo-header" src="images/logo.png"/>
                            </div>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @if (Auth::check())
                                <a href="http://voluntariosmexico.org/" target="_blank"> Voluntarios México</a>
                                <div class="dropdown">
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
                                    </ul>
                                </div>
                                @else
                                
                                <a class="menuRight" href="http://voluntariosmexico.org/" target="_blank"> Voluntarios México</a>
                                <a class="menuRight" href="{{ url('/login') }}">Iniciar Sesión</a>
                                <a class="menuRight" href="{{ url('/register') }}">Registro</a>
                                @endif
                            </div>
                            @endif
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <div class="container pink-header-nav">
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
            </div>
        </div>
<!--Carrusel (?)-->
        <div id="myCarousel" class="carousel slide img-responsive" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li style="border: 2px solid #fdee47" data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li style="border: 2px solid #fdee47" data-target="#myCarousel" data-slide-to="1"></li>
            <li style="border: 2px solid #fdee47" data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="images/slider/voluntariado-slider-1.jpg" alt="First slide">
              <div class="container">
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="images/slider/voluntariado-slider-2.jpg" alt="Second slide">
              <div class="container">
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="images/slider/voluntariado-slider-3.jpg" alt="Third slide">
              <div class="container">
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: #fcee47; font-size: 2em"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: #fcee47; font-size: 2em"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
<!--Intro-->        
        <div class="wrapper-white">
          <h1 class="title"><b>Convocatorias  <span class="yellow-title">Voluntarios México</b></span></h1> 
          <p class="m-top2">Para nosotros el voluntariado <b>NO</b> es una donación de tiempo, sino de <b>TALENTO</b>, en esto basamos nuestra metodología y damos a nuestros voluntarios la oportunidad de colaborar en sus áreas de experiencia de acuerdo a sus perfiles o bien a sus gustos, así se logra una participación más comprometida y valiosa.</p>
          <p>Nos comprometemos también a que la colaboración sea con obligaciones, pero también <b>BENEFICIOS</b> y que se reconozca la colaboración que los voluntarios brindan.</p>
          <p>Los voluntarios tienen un sentido de pertenencia y compromiso, que en ocasiones en más grande que el de los mismo empleados de las organizaciones. </p>
          <p>México necesita agentes de cambio, personas que practiquen día a día la responsabilidad social individual, y que empecemos a construir el país donde queremos vivir. </p><br><br>
        </div>  
<!--Convocatorias-->
        <div class="wrapper">
            <div class="col-lg-12 blue-wrapper margin-bottom">
              <p class="title"><b>Convocatorias Abiertas</b></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 centered">
                    <div class="convo-wrapper">
                        <h2 class="convo-title">Eco Fest</h2>
                        <img class="" src="images/convocatorias2017/ecofest-voluntariado.jpg" alt="Generic placeholder image" width="290" height="230"/><br><br>
                        <div class="convo-body">
                            <span class="light-weight">Festival Verde <br></span>
                            <span><b>25 & 26 de Marzo 2017</b></span>
                            <p><a class="pink-letter" href="#">Ver más</a></p>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 centered">
                    <div class="convo-wrapper">
                        <h2 class="convo-title">Vive Latino</h2>
                        <img class="" src="images/convocatorias2017/ecofest.jpg" width="290" height="230"><br><br>
                        <div class="convo-body">
                          <span class="light-weight">Festival Vive Latino </span>
                          <span><b><br>25 & 26 de Marzo 2017</b></span>
                          <p><a class="pink-letter" href="#">Ver más</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 centered hidden">
                    <div class="convo-wrapper"></div>
                </div>
            </div>
        </div>
        <div class="wrapper m-top2">
            <div class="col-lg-12 pink-wrapper margin-bottom">
                <p class="title"><b>Convocatorias Cerradas</b></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 centered">
                    <div class="convo-wrapper-closed">
                        <h2 class="convo-title-gray">Taller de inducción</h2>
                        <img class="element-closed" src="images/convocatorias2017/induccion.jpg" alt="Generic placeholder image" width="290" height="230" /><br><br>
                        <div class="convo-body">
                            <span class="light-weight"></span>
                            <span><b>25 de Febrero<br><br></b></span>
                {{-- <p><a class="blue-letter-closed" href="#">Ver más<br><br></a></p>--}}        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-white m-top2">
            <footer>
              <p class="pull-right"><a href="#">Subir</a></p>
              <p class="footertxt">&copy; <b>2017 Voluntarios México  &middot; Aviso de Privacidad &middot;</p></b>
            </footer>
      </div>

    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>