<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ciclo');
            $table->integer('creditos');
            $table->integer('horas_teoricas');
            $table->integer('horas_practicas');
            $table->integer('total_horas');
            $table->string('tipo');
            $table->string('caracter');
            $table->string('silabo');
            $table->foreignId('id_escuela')->references('id')->on('escuelas');
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
        Schema::dropIfExists('cursos');
    }
}
