<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->text('enunciado');
            $table->string('tipo', 1); //U=Unirespuesta, M=Multirespuesta
            $table->foreignId('cuestionario_id')->references('id')->on('cuestionarios')->onDelete('cascade');
            $table->foreignId('respuesta_definida_id')->references('id')->on('respuesta_definidas')->onDelete('cascade');
            $table->foreignId('dimension_id')->references('id')->on('dimensions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};
