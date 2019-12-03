<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomicilioParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_particulars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('id')->references('id')->on('datos_generales');
            $table->string('calNumPar');
            $table->string('colParticular');
            $table->string('munParticular');
            $table->string('cpParticular');
            $table->string('tipVivParticular');
            $table->string('antLocParticular');
            $table->string('antDomActualPar');
            $table->string('tipDomParticular');
            $table->string('valProParticular');
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
        Schema::dropIfExists('domicilio_particulars');
    }
}
