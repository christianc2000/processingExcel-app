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
        Schema::create('fuente_pregunta', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado')->default('true');
            $table->foreignId('fuente_id')->references('id')->on('fuentes');
            $table->foreignId('pregunta_id')->references('id')->on('preguntas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuente_pregunta');
    }
};
