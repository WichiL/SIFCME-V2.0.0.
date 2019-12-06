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
            $table->string('calNumNegocio')->nullable();
            $table->string('colNegocio')->nullable();
            $table->string('munNegocio')->nullable();
            $table->string('cpNegocio')->nullable();
            $table->string('domFiscal')->nullable();
            $table->string('otroDomNegocio')->nullable();
            $table->string('sector')->nullable();
            $table->string('actEmpresarial')->nullable();
            $table->string('proOfrece')->nullable();
            $table->string('expEmpresario')->nullable();
            $table->string('expActividad')->nullable();
            $table->string('iniOperaciones')->nullable();
            $table->string('supNegocio')->nullable();
            $table->string('perteneceA')->nullable();
            $table->string('rentaNegocio')->nullable();
            $table->timestamps();
            $table->bigInteger('generales_id')->unsigned();
            $table->foreign('generales_id')
                ->references('id')
                ->on('datos_generales')
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
        Schema::dropIfExists('domicilio_negocios');
    }
}
