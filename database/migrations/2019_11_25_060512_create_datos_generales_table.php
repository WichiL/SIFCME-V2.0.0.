<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_generales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomSolicitante');
            $table->string('nomEmpresa');
            $table->string('rfcEmpresa');
            $table->string('fecNacimiento');
            $table->string('estNacimiento');
            $table->string('munNacimiento');
            $table->string('edad');
            $table->string('sexo');
            $table->string('estCivil');
            $table->string('curp');
            $table->string('rfc');
            $table->bigInteger('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')
                ->references('id')
                ->on('solicitudes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('datos_generales');
    }
}
