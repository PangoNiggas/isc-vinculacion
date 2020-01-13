<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreC')->nullable();
            $table->string('ApellidoPC')->nullable();
            $table->string('ApellidoMC')->nullable();
            $table->string('CURPC')->nullable();

            $table->unsignedInteger('emprendedor_id')->nullable();
            $table->foreign('emprendedor_id')->references('id')->on('emprendedores')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('colaboradores');
    }
}
