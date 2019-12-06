<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitalTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capital_trabajos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desCap')->nullable();
            $table->string('monCap')->nullable();
            $table->string('plaCap')->nullable();
            $table->timestamps();
            $table->bigInteger('destino_id')->unsigned();
            $table->foreign('destino_id')
                ->references('id')
                ->on('destino_creditos')
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
        Schema::dropIfExists('capital_trabajos');
    }
}
