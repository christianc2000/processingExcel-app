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
            $table->string('tipo'); //U=Unirespuesta, M=Multirespuesta, C=Condicional
            $table->text('respuesta');
           // $table->string('fuente');
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
