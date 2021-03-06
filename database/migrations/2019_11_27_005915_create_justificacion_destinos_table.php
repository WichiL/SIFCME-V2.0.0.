<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJustificacionDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('justificacion_destinos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('justCredito')->nullable();
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
        Schema::dropIfExists('justificacion_destinos');
    }
}
