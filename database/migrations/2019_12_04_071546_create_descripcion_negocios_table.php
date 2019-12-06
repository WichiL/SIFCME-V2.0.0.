<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescripcionNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_negocios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('historia');
            $table->string('actMuj');
            $table->string('actHom');
            $table->string('genMuje');
            $table->string('genHom');
            $table->string('nomina');
            $table->string('salario');
            $table->string('upNomina');
            $table->string('incremento');
            $table->string('porque');
        $table->timestamps();
        $table->bigInteger('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')
                ->references('id')
                ->on('solicitudes')
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
        Schema::dropIfExists('descripcion_negocios');
    }
}
