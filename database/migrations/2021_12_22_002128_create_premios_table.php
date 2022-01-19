<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremiosTable extends Migration
{
    public function up()
    {
        Schema::create('premios', function (Blueprint $table) {
            $table->id();
            $table->integer('puntuacion');
            $table->boolean('termino');
            // foraneas
            $table->foreignId('jugadores_id')
            ->constrained('jugadores')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('ronda_pregunta_intentos_id')
            ->constrained('ronda_pregunta_intentos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('premios');
    }
}
