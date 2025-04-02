<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaCotejoRevisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_cotejo_revisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_lista_cotejo_silabo')->references('id')->on('lista_cotejo_silabos');
            $table->foreignId('id_lista_cotejo')->references('id')->on('lista_cotejos');
            $table->string('respuesta')->nullable();
            $table->text('observacion')->nullable();
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
        Schema::dropIfExists('lista_cotejo_revisions');
    }
}
