<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalacionesFisicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalaciones_fisicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desIns')->nullable();
            $table->string('monIns')->nullable();
            $table->string('plaIns')->nullable();
            $table->string('graIns')->nullable();
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
        Schema::dropIfExists('instalaciones_fisicas');
    }
}
