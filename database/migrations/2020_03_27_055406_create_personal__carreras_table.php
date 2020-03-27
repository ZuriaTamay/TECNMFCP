<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pers_carreras', function (Blueprint $table) {
            $table->id('id_perscarre');
            $table->string('nombre', 30);
            $table->string('apellido', 25);
            $table->string('cargo', 30);
            $table->text('biografia');
            $table->string('fotografia', 191);
            $table->unsignedBigInteger('id_ca');
            $table->unsignedBigInteger('id_carg');
            $table->foreign('id_ca')->references('id_ca')->on('cuerpo_acads');
            $table->foreign('id_carg')->references('id_carg')->on('cargos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pers_carreras');
    }
}
