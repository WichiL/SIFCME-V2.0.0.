<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaquinariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinarias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desMaq')->nullable();
            $table->string('monMaq')->nullable();
            $table->string('plaMaq')->nullable();
            $table->string('graMaq')->nullable();
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
        Schema::dropIfExists('maquinarias');
    }
}
