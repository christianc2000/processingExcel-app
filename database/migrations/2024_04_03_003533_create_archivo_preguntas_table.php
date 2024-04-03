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
        Schema::create('archivo_preguntas', function (Blueprint $table) {
            $table->id();
            $table->text('respuesta');
            $table->unsignedInteger('cantidad')->default(0);
            $table->decimal('porcentaje',8,2);
            $table->foreignId('pregunta_id')->references('id')->on('preguntas')->onDelete('cascade');
            $table->foreignId('archivo_id')->references('id')->on('archivos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivo_preguntas');
    }
};
