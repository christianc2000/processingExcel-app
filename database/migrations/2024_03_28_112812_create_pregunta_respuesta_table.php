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
        Schema::create('pregunta_respuesta', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cantidad');
            $table->foreignId('pregunta_id')->references('id')->on('preguntas')->onDelete('cascade');
            $table->foreignId('respuesta_id')->references('id')->on('respuestas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pregunta_respuesta');
    }
};
