<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeanegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideanegocios', function (Blueprint $table) {
            $table->increments('id');
            $table->text('definicion');
            $table->text('croquis');
            $table->string('tipodomicilio');
            $table->string('tipoasentamiento');
            $table->string('tipoasenotro')->nullable();
            $table->string('nombreasentamiento');
            $table->string('numerointerior')->nullable();
            $table->string('numeroexterior');
            $table->string('localidad');
            $table->string('municipio');
            $table->string('estado');
            $table->string('codigopostal');
            $table->string('superficie');
            $table->text('refencia');

            $table->integer('proyecto_id')->unsigned();
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');

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
        Schema::dropIfExists('ideanegocios');
    }
}
