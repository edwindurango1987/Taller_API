<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequestCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "titulo" => ['required','string','max:255','unique:App\Models\Libro,titulo'],
            "autor" => ['required','string','max:255',],
            "genero" => ['required','string','max:255',],
            "anno_publicacion" => ['year','nullable'],
            "numero_paginas" => ['required','integer','max:1000'],
            "idioma" => ['required','string','max:255'],
            "editorial" => ['required','string','max:255'],
            "isbn" => ['required','string','unique:App\Models\Libro,isbn','max:255'],
            "disponibilidad" => ['required','string','max:255'],
            "ubicacion" => ['required','string','max:255'],
        ];
    }
}
