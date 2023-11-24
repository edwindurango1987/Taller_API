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
        Schema::create('libros', function (Blueprint $table) {
            $table->id('id');
            $table->string('titulo')->unique();
            $table->string('autor');
            $table->string('genero');
            $table->year('anno_publicacion')->nullable();
            $table->integer('numero_paginas');
            $table->string('idioma');
            $table->string('editorial');
            $table->string('isbn')->unique();
            $table->enum('disponibilidad', ['Disponible', 'Prestado', 'En Reparacion', 'Otro']);
            $table->string('ubicacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
