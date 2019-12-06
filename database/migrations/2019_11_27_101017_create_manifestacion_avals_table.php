<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestacionAvalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifestacion_avals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomAval');
            $table->string('estCivilAval');
            $table->string('avalAnterior');
            $table->string('domAval');
            $table->string('munAval');
            $table->string('cpAval');
            $table->string('telAval');
            $table->string('parentesco');
            $table->string('valPatrimonio');
            $table->string('consPropiedad');
            $table->string('numRegistro');
            $table->string('folio');
            $table->string('vol');
            $table->string('secc');
            $table->string('fecInscripcion');
            $table->string('domPropiedad');
            $table->string('munPropiedad');
            $table->string('cpPropiedad');
            $table->bigInteger('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')
                ->references('id')
                ->on('solicitudes')
                ->onDelete('cascade');;
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
        Schema::dropIfExists('manifestacion_avals');
    }
}
