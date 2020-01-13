<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Actividad');
            $table->string('Razonsocial');
            $table->string('RFC');
            $table->string('NombreDirector');
            $table->string('Telefonoemp');
            $table->string('CorreoEmp');
            $table->string('Propuesta');
            $table->string('PropuestaOtra')->nullable();
            $table->string('NombreProd');
            $table->text('Descripcion');
            $table->string('Organizacion');
            $table->string('Cual')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Semestre');

            $table->integer('emprendedor_id')->unsigned();
            $table->foreign('emprendedor_id')->references('id')->on('emprendedores')->onDelete('cascade');

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
        Schema::dropIfExists('proyectos');
    }
}
