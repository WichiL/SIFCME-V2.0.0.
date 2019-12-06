<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_bancarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipCuenta')->nullable();
            $table->string('numCuenta')->nullable();
            $table->string('banco')->nullable();
            $table->string('clbInterbancaria')->nullable();
            $table->string('plaza')->nullable();
            $table->string('sucursal')->nullable();
            $table->string('ubicacion')->nullable();
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
        Schema::dropIfExists('informacion_bancarias');
    }
}
