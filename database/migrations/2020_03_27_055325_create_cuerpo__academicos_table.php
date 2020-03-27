<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuerpoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cuerpo_acads', function (Blueprint $table) {
            $table->id('id_ca');
            $table->string('grado', 2);
            $table->string('clave', 15);
            $table->string('nombre_ca', 30);
            $table->string('integrantes', 30);
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_grado');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('id_grado')->references('id_grado')->on('grados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuerpo_acads');
    }
}
