<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     * Aquí se define la estructura de la tabla edificios.
     */
    public function up(): void
    {
        Schema::create('edificios', function (Blueprint $table) {
            $table->id(); // Campo ID autoincremental que identifica a cada edificio
            $table->string('nombre'); // Nombre del edificio (Ejemplo: Edificio C)
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Revierte la migración.
     * Elimina la tabla edificios si existe.
     */
    public function down(): void
    {
        Schema::dropIfExists('edificios');
    }
};