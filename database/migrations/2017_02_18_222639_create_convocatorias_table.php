<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo');
            $table->integer('inscritos');
            $table->string('imagen', 200);
            $table->string('descripcion', 5000);
            $table->text('problema');
            $table->date('fecha_inicio');
            $table->string('direccion', 100 );
            $table->string('solucion', 2000);
            $table->string('impacto', 2000);
            $table->string('area', 2000);
            $table->string('turno', 50);
            $table->integer('aplicaciones');
            $table->string('comentarios', 200);
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convocatorias');
    }
}
