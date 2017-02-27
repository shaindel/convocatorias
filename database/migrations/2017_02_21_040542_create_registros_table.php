<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('apellidos');
            $table->string('email');
            $table->string('password');
                    // $table->text('genero');
            $table->date('fecha_nacimiento');
            $table->text('pais');
            $table->text('estado');
            $table->text('ciudad');
            $table->string('foto_perfil');
            $table->string('facebook');
            $table->string('twitter');
            $table->text('celular'); 
            $table->text('ocupacion');
            $table->string('areas');
            $table->text('habilidades');
                    // $table->text('talla');
            $table->text('bio');  
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
