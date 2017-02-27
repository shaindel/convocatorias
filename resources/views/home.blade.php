@extends('layouts.app')

@section('content')
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
            @foreach ($convocatorias as $convocatoria)
                <div class="col-lg-4 centered">
                    <div class="convo-wrapper">
                        <h2 class="convo-title">{{$convocatoria->titulo}}</h2>
                        <img class="" src="/images/convocatorias2017/{{$convocatoria->imagen}}" alt="voluntariado convocatoria" width="290" height="230"/><br><br>
                        <div class="convo-body">
                            <span class="light-weight"> <br></span>
                            <span><b>25 & 26 de Marzo 2017</b></span>
                            <p><a class="pink-letter" href='/convocatorias/{{$convocatoria->id}}'>Ver más</a></p>
                        </div>
                    </div>
                </div>
            @endforeach     
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
@endsection