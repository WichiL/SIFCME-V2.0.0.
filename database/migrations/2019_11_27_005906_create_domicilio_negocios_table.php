<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicilioNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_negocios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id')->references('id')->on('datos_generales');
            $table->string('calNumNegocio');
            $table->string('colNegocio');
            $table->string('munNegocio');
            $table->string('cpNegocio');
            $table->string('domFiscal');
            $table->string('sector');
            $table->string('actEmpresarial');
            $table->string('proOfrece');
            $table->string('expEmpresario');
            $table->string('expActividad');
            $table->string('iniOperaciones');
            $table->string('supNegocio');
            $table->string('perteneceA');
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
        Schema::dropIfExists('domicilio_negocios');
    }
}
