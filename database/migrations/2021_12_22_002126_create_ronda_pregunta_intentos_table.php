<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRondaPreguntaIntentosTable extends Migration
{
    public function up()
    {
        Schema::create('ronda_pregunta_intentos', function (Blueprint $table) {
            $table->id();
            // foraneas
            $table->foreignId('opciones_id')
            ->nullable()
            ->constrained('opciones')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('rondas_id')
            ->constrained('rondas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('preguntas_id')
            ->constrained('preguntas')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('intentos_id')
            ->constrained('intentos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ronda_pregunta_jugadores');
    }
}