<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Edificio; // ← Importante para usar foreignIdFor

return new class extends Migration
{
    /**
     * Ejecuta las migraciones.
     */
    public function up(): void
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->id();

            // Nombre del aula (ejemplo: A-101)
            $table->string('nombre', 6);

            // Capacidad numérica del aula
            $table->integer('capacidad', false, true);

            // Llave foránea basada en el modelo Edificio
            // Esto crea 'edificio_id' automáticamente
            $table->foreignIdFor(Edificio::class)
                  ->constrained()
                  ->onDelete('cascade'); // Si se borra un edificio, se borran sus aulas

            $table->timestamps();
        });
    }

    /**
     * Revierte las migraciones.
     */
    public function down(): void
    {
        Schema::dropIfExists('aulas');
    }
};