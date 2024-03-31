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
        Schema::create('carreras_facultad', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('estado');
            $table->foreignId('facultad_id')->references('id')->on('facultades')->onDelete('cascade');
            $table->foreignId('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras_facultad');
    }
};
