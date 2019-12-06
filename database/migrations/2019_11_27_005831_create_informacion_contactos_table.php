<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_contactos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->nullable();
            $table->string('facTwitter')->nullable();
            $table->string('telNegocio')->nullable();
            $table->string('telParticular')->nullable();
            $table->string('telCelular')->nullable();
            $table->string('telRecados')->nullable();
            $table->string('perRecados')->nullable();
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
        Schema::dropIfExists('informacion_contactos');
    }
}
