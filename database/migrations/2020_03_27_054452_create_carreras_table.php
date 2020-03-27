<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
             Schema::create('carrera', function (Blueprint $table) {
    $table->id('id_carrera');
     $table->text('obj_gral');
      $table->text('mision');
       $table->text('vision');
        $table->text('test_acred');     

});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera');
    }
}
