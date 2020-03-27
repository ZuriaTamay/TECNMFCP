<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('comentarios', function (Blueprint $table) {
            $table->id('id_com');
            $table->string('correo_o', 50);
            $table->text('des_com');
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_correo_d');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('id_correo_d')->references('id_correo_d')->on('correo_ds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
