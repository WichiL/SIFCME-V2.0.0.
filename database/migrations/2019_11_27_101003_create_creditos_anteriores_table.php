<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditosAnterioresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos_anteriores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomCredito1');
            $table->string('montoCredito1');
            $table->string('saldoActual1');
            $table->string('pago1');
            $table->string('mensual1');
            $table->string('yr1');
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
        Schema::dropIfExists('creditos_anteriores');
    }
}
