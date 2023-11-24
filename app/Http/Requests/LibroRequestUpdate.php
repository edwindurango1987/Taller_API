<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequestUpdate extends FormRequest
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
            "titulo" => ['string','max:255','unique:App\Models\Libro,titulo'],
            "autor" => ['string','max:255',],
            "genero" => ['string','max:255',],
            "anno_publicacion" => ['year','nullable'],
            "numero_paginas" => ['integer','max:1000'],
            "idioma" => ['string','max:255'],
            "editorial" => ['string','max:255'],
            "isbn" => ['string','max:255'],
            "disponibilidad" => ['string','max:255'],
            "ubicacion" => ['string','max:255'],
        ];
    }
}
