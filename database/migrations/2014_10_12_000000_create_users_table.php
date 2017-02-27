<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->increments('user_id');
            $table->string('nombre');
            $table->text('apellidos');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('genero');
            $table->date('birthday');
            $table->text('pais');
            $table->text('estado');
            $table->text('ciudad');
            $table->string('foto');
            $table->string('facebook');
            $table->string('twitter');
            $table->text('celular'); 
            $table->text('profesion');
            $table->string('areas');
            $table->text('habilidades');
            $table->string('talla');
            $table->text('bio');
            $table->integer('status'); 
            $table->rememberToken(); 
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
        Schema::dropIfExists('users');
    }
}
