<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstructurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estructuras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('recPropios');
            $table->string('recFondoPlata');
            $table->string('invTotal');
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
        Schema::dropIfExists('estructuras');
    }
}
