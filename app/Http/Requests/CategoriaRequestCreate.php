<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequestCreate extends FormRequest
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
            'nombre_categoria' => 'required|string|max:255',
            'descripcion_categoria' => 'required|string|max:4000',
            'estado_categoria' => 'required|boolean',
            'prioridad_categoria' => 'required|integer',
        ];
    }
}
