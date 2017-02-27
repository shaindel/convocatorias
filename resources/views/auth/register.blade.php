@extends('layouts.app')
<title>Registro</title>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 m-top10">
            <div class="panel panel-default">
                <div class="panel-heading title-blue">Registro</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Fecha de nacimiento</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" required>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                            <label for="genero" class="col-md-4 control-label">Género</label>

                            <div class="col-md-6">
                                <select class="form-control" id="genre" name="genero" required>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                    <option>Otro</option>
                                  </select>

                                @if ($errors->has('genero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                            <label for="pais" class="col-md-4 control-label">País</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control" name="pais" required>

                                @if ($errors->has('pais'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control" name="estado" required>

                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                            <label for="ciudad" class="col-md-4 control-label">Ciudad</label>

                            <div class="col-md-6">
                                <input id="ciudad" type="text" class="form-control" name="ciudad" required>

                                @if ($errors->has('ciudad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="foto" class="col-md-4 control-label">Imagen de perfil</label>


                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="fotoPerfil" name="foto" aria-describedby="fileHelp" required>

                                @if ($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                            <label for="facebook" class="col-md-4 control-label">Facebook</label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control" name="facebook">

                                @if ($errors->has('facebook'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                
                        <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                            <label for="twitter" class="col-md-4 control-label">Twitter</label>

                            <div class="col-md-6">
                                <input id="twitter" type="text" class="form-control" name="twitter">

                                @if ($errors->has('twitter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('twitter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('profesion') ? ' has-error' : '' }}">
                            <label for="profesion" class="col-md-4 control-label">Último grado de estudios | Profesión</label>

                            <div class="col-md-6">
                                <input id="profesion" type="text" class="form-control" name="profesion" required>

                                @if ($errors->has('profesion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profesion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('areas') ? ' has-error' : '' }}">
                            <label for="areas" class="col-md-4 control-label">Áreas de interés</label>

                            <div class="col-md-6">
                                <input id="areas" type="text" class="form-control" name="areas" required>

                                @if ($errors->has('areas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('areas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('habilidades') ? ' has-error' : '' }}">
                            <label for="habilidades" class="col-md-4 control-label">Habilidades</label>

                            <div class="col-md-6">
                            <small id="" class="form-text text-muted"> &middot; Si sabes de fotografía, redes sociales, etc, indícalo así podremos seleccionarte en un área donde puedas desarrollarte mejor. &middot; </small>
                                <input id="habilidades" type="text" class="form-control" name="habilidades" required>

                                @if ($errors->has('habilidades'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('habilidades') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('talla') ? ' has-error' : '' }}">
                            <label for="talla" class="col-md-4 control-label">Talla de playera</label>

                            <div class="col-md-6">
                                <small id="" class="form-text text-muted"> &middot; Esto te lo pedimos pues en cada eventos se proporciona playera del evento. &middot; </small>
                                <select class="form-control" id="genre" name="talla" required>
                                    <option>Chica</option>
                                    <option>Mediana</option>
                                    <option>Grande</option>
                                  </select>


                                @if ($errors->has('talla'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('talla') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                            <label for="bio" class="col-md-4 control-label">Háblanos de ti</label>
                            

                            <div class="col-md-6">
                            <small id="" class="form-text text-muted"> &middot; ¿Porqué quieres ser voluntario? &middot; </small>
                                <textarea name ="bio" class="form-control" id="exampleTextarea" rows="3"></textarea>

                                @if ($errors->has('bio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                                      
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-custom">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
