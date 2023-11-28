<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Libro extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'anno_publicacion',
        'numero_paginas',
        'idioma',
        'editorial',
        'isbn',
        'disponibilidad',
        'ubicacion',
        'fk_id_categoria',
    ];

    public function categorias(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'fk_id_categoria', 'id_categoria');
    }
}
