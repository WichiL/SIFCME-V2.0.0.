<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclaracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaraciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecCierre');
            $table->string('efeCaja');
            $table->string('salBancos');
            $table->string('cueCobrar');
            $table->string('valInventarios');
            $table->string('totEfectivo');
            $table->string('inmSolicitante1');
            $table->string('inmSolicitante2');
            $table->string('valInmueble1');
            $table->string('valInmueble2');
            $table->string('totInmuebles');
            $table->string('maqSolicitante1');
            $table->string('maqSolicitante2');
            $table->string('maqSolicitante3');
            $table->string('maqSolicitante4');
            $table->string('maqSolicitante5');
            $table->string('maqSolicitante6');
            $table->string('valMaquina1');
            $table->string('valMaquina2');
            $table->string('valMaquina3');
            $table->string('valMaquina4');
            $table->string('valMaquina5');
            $table->string('valMaquina6');
            $table->string('totMaquinaria');
            $table->string('carSolicitante1');
            $table->string('carSolicitante2');
            $table->string('valCarro1');
            $table->string('valCarro2');
            $table->string('totCarros');
            $table->string('totInstalacion');
            $table->string('totFijo');
            $table->string('actTotal');
            $table->string('pasTotal');
            $table->timestamps();
            $table->bigInteger('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')
                ->references('id')
                ->on('solicitudes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('declaraciones');
    }
}
