<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('id_conv');
            $table->string('nom_conv', 30);
            $table->date('fecha_inc');
            $table->date('fecha_finc');
            $table->string('arch_conv', 191);
            $table->unsignedBigInteger('id_carrera');
            $table->unsignedBigInteger('id_tc');
            $table->foreign('id_carrera')->references('id_carrera')->on('carrera');
            $table->foreign('id_tc')->references('id_tc')->on('tipo_conv');                            
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
