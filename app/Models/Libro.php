<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}
