<?php

use App\Convocatoria;
// use App\Registro;
Route::get('/', 'ConvocatoriasController@index');
Route::get('/home', 'ConvocatoriasController@index');

Route::get('/perfil', 'RegistrosController@verperfil')->name('ver_perfil');
Route::post('/actualizar_perfil', 'RegistrosController@actualizarperfil')->name('actualizar_perfil');

Route::get('/convocatorias/{convocatoria}', 'ConvocatoriasController@vista');
// Route::post('/convocatorias/{convocatoria}', 'RegistrosController@store');


// Route::post('', 'ConvocatoriasController@store');

 // Route::get('/registro/{user_id}', 'RegistrosController@index');
// Route::post('/registro', 'RegistrosController@create');

Route::post('/convocatorias/', 'ConvocatoriasController@store');
// Route::get('password/email', 'Auth\PasswordController@getEmail');

Auth::routes();

// Route::get('/home', 'HomeController@index');