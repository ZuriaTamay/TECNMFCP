<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('plan_estudios', function (Blueprint $table) {
            $table->id('id_pest');
            $table->string('clave', 11);
            $table->string('total_cred', 3);
            $table->string('arch_planest', 191);
            $table->unsignedBigInteger('id_carrera');
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
        Schema::dropIfExists('plan_estudios');
    }
}
