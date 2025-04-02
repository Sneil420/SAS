<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_curso')->references('id')->on('cursos');
            $table->foreignId('id_perfil')->references('id')->on('perfils');
            $table->foreignId('id_semestre')->references('id')->on('semestres');
            $table->string('estado')->default('Enviado');
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
        Schema::dropIfExists('asignacions');
    }
}
