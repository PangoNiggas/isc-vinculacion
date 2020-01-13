<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprendedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre', 50);
            $table->string('ApellidoP', 50);
            $table->string('ApellidoM', 50);
            $table->string('FechaNaci');
            $table->string('Edad');
            $table->string('Sexo', 50);
            $table->string('EstadoCivil', 50);
            $table->string('Direccion');
            $table->string('NumeroExterior');
            $table->string('NumeroInterior')->nullable();
            $table->string('Colonia');
            $table->string('Ciudad');
            $table->string('Municipio');
            $table->string('CodigoPostal');
            $table->string('TelefonoCel')->nullable();
            $table->string('TelefonoOfi')->nullable();
            $table->string('TelefonoCasa')->nullable();
            $table->string('Correo')->unique();
            $table->string('Escolaridad');
            $table->string('TipoPersona');
            $table->string('CURP');
            $table->string('INE');
            $table->string('RFC')->nullable();
            $table->string('RFCM')->nullable();
            $table->string('RazonSocial')->nullable();
            $table->string('ObjetivoSocial')->nullable();
            $table->string('TipoEmpresa')->nullable();
            $table->string('TipoOtra')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('emprendedores');
    }
}
