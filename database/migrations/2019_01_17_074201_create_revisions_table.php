<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Documento');
        
            $table->integer('avance_id')->unsigned();
            $table->foreign('avance_id')->references('id')->on('avances')->onDelete('cascade');

         /*   
            $table->integer('fase_id')->unsigned();
            $table->foreign('fase_id')->references('id')->on('fases')->onDelete('cascade');*/
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
        Schema::dropIfExists('revisions');
    }
}
