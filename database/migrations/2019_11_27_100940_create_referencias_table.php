<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencias', function (Blueprint $table) {
            $table->bigIncrements('id');
        
            $table->string('nom1');
            $table->string('perContactar1');
            $table->string('ubicacion1');
            $table->string('tel1');
            $table->string('relacion1');
            $table->string('limCredito1');
            $table->string('yrsRelacion1');
            $table->string('nom2');
            $table->string('perContactar2');
            $table->string('ubicacion2');
            $table->string('tel2');
            $table->string('relacion2');
            $table->string('limCredito2');
            $table->string('yrsRelacion2');
            $table->string('nom3');
            $table->string('perContactar3');
            $table->string('ubicacion3');
            $table->string('tel3');
            $table->string('relacion3');
            $table->string('limCredito3');
            $table->string('yrsRelacion3');
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
        Schema::dropIfExists('referencias');
    }
}
