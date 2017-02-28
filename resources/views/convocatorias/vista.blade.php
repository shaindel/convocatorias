@extends('layouts.app')
    <link rel="stylesheet" type="text/css" href="../../../css/vista.css">
@section('content')
    <div class="wrapper-white m-top6">
      <div class="container anchosetenta">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12" style="text-align: center;margin: 0 auto;display: block;">
            <div class="yellow-box">
              <h2 class="box-txt">{{$convocatoria->titulo}}</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <img src="/images/convocatorias2017/{{$convocatoria->imagen}}" alt="EcoFest 2017" style="width:100%;margin: 0 auto;display: block;" />
            </div>
        </div>
        {{-- <div class="">
          <div class="col-lg-12 gray-wrapper">
            Voluntarios inscritos:
            <span id="volsnumber">{{ $convocatoria->inscritos}}</span>
          </div>
        </div> --}}
        <div class="m-top6">
          <p class="blue-txt"><strong>Fecha y Lugar:</strong></p>
          <p class="txtContainer">
            <br><b>{{ $convocatoria->direccion}}</b><hr>
          </p>
        </div>        
        <!--Descripcion del evento-->
        <div class="m-top2">
          <p class="blue-txt"><strong>Descripción del evento:</strong></p>
          <pre class="txtContainer">
            {{$convocatoria->descripcion}}<hr>
          </pre>
        </div>
        <div class="m-top2">
          <p class="blue-txt"><strong>Problema:</strong></p>
          <p class="txtContainer">
            {{ $convocatoria->problema}}<hr>
          </p>
        </div>
        <div class="m-top2">
          <p class="blue-txt"><strong>Solución:</strong></p>
          <p class="txtContainer">
            {{ $convocatoria->solucion}}<hr>
          </p>
        </div>
        <div class="m-top2">
          <p class="blue-txt"><strong>Impacto:</strong></p>
          <p class="txtContainer">
            {{$convocatoria->impacto}}
            <hr>
            
          </p>
        </div>              
        <form class="form" method="POST" action="/convocatorias/">
        <div class="col-lg-12">  
          {{ csrf_field() }}



          @if (Auth::guest())

            @else
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="convocatoria_id" value="{{ $convocatoria->id }}">
            @endif

          <p class="blue-txt"><strong>Elige un área:</strong></p>
          <div><pre class="txtContainer"> {{$convocatoria->area}}</pre>
          <input type="text" name="area" placeholder="Escribe una opción"><br><br>

          <p class="blue-txt"><strong>Elige un horario o día:</strong></p>
          <div><pre class="txtContainer"> {{$convocatoria->turno}}</pre>
          <input type="text" name="horario" placeholder="Escribe una opción">


          @if (Auth::guest())
          <div class="row col-lg-12 m-top2"></div>
            <p><a href="{{ route('login') }}">Inicia sesión </a> para aplicar a la convocatoria.
              <a class="fright" href="{{ url('/home') }}">Regresar a las Convocatorias</a><p>
          </div>

          @elseif ($query = DB::table('registros')->where('user_id', '=', Auth::user()->id) ->exists() && $aplico = DB::table('registros')->where('convocatoria_id','=', $convocatoria->titulo) ->exists())

            <div class="row col-lg-12 m-top2"> Ya has aplicado a esta convocatoria</div>

          @else
            <div class="row col-lg-12 m-top2">
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
{{--               <input type="hidden" name="user_id" value="{{ Auth::user()->name }}">
 --}}
              <input type="hidden" name="convocatoria_id" value="{{ $convocatoria->id }}">
              <input type="hidden" name="convocatoria_id" value="{{ $convocatoria->titulo }}">
              <button class="btn btn-custom" type="submit" value="Enviar">Enviar</button>
              <a class="fright" href="{{ url('/home') }}">Regresar a las Convocatorias</a><p>
            </div>
          
          @endif
          </form> 
        </div>        
      </div>

    </div>
      <!-- /END THE FEATURETTES -->
      <div class="wrapper-white">
        <footer>
          <hr>
          <p class="pull-right"><a href="#">Subir</a></p>
          <p class="footertxt">&copy; 2017 Voluntarios México  &middot; Aviso de Privacidad &middot;</p>
        </footer>
      </div>
      <!-- FOOTER -->
    </div><!-- /.container -->


@endsection
