<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('mat_carreras', function (Blueprint $table) {
            $table->id('id_mc');
            $table->string('nombre', 30);
            $table->string('clave', 15);
            $table->string('horas', 2);
            $table->string('semestre', 2);
            $table->string('hora_pra', 2);
            $table->string('hora_teo', 2);
            $table->string('creditos', 3);
            $table->unsignedBigInteger('id_pest');
            $table->foreign('id_pest')->references('id_pest')->on('plan_estudios');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mat_carreras');
    }
}
