<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('id_alum');
            $table->text('nombre_alum');
            $table->text('apellido_alum');
            $table->string('imagen', 191);
            $table->unsignedBigInteger('tipo_est');
            $table->unsignedBigInteger('id_carrera');
            $table->foreign('tipo_est')->references('id_tipo_est')->on('tipo_estudiantes');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
