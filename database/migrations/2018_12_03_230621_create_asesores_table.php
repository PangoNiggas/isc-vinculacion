<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->string('ApellidoP');
            $table->string('ApellidoM');
            $table->string('Direccion');
            $table->string('Ciudad');
            $table->string('Estado');
            $table->string('Colonia');
            $table->string('CP');
            $table->string('RFC');
            $table->string('Escolaridad');
            $table->string('CURP');
            $table->string('Telefono');
            $table->date('FechaNacimiento');
            $table->string('EstadoCivil');
            $table->string('Sexo');
            $table->string('Correo')->unique();
            $table->string('Contraseña');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            
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
        Schema::dropIfExists('asesores');
    }
}
