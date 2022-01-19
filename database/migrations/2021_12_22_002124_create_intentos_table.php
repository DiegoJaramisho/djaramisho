<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntentosTable extends Migration
{
    public function up()
    {
        Schema::create('intentos', function (Blueprint $table) {
            $table->id();
            // foraneas
            $table->foreignId('jugadores_id')
            ->constrained('jugadores')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('intentos');
    }
}