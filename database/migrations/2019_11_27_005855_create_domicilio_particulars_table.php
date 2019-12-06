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
            $table->string('calNumPar')->nullable();
            $table->string('colParticular')->nullable();
            $table->string('munParticular')->nullable();
            $table->string('cpParticular')->nullable();
            $table->string('tipVivParticular')->nullable();
            $table->string('antLocParticular')->nullable();
            $table->string('antDomActualPar')->nullable();
            $table->string('tipDomParticular')->nullable();
            $table->string('valProParticular')->nullable();
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
        Schema::dropIfExists('domicilio_particulars');
    }
}
