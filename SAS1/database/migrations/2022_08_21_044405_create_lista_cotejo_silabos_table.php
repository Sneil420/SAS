<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaCotejoSilabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_cotejo_silabos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_asignacion')->references('id')->on('asignacions');
            $table->string('docente_revisado');
            $table->string('director_escuela');
            $table->integer('total_si');
            $table->integer('total_no');
            $table->string('estado');
            $table->string('codigo')->nullable();
            $table->string('ruta_qr')->nullable();
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
        Schema::dropIfExists('lista_cotejo_silabos');
    }
}
