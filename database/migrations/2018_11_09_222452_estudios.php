<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('estudios', function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('idEmpleado')->unsigned();
            $table->foreign('idEmpleado')->references('id')->on('medicos');
            $table->integer('idPaciente')->unsigned();
            $table->foreign('idPaciente')->references('id')->on('pacientes');
            $table->string('fecha');
            $table->string('analisis');
            $table->string('nombre');
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
        Schema::dropIfExists('estudios');
    }
}
