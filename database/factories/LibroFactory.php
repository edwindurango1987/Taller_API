<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'autor' => $this->faker->name(),
            'genero' => $this->faker->word(),
            'anno_publicacion' => $this->faker->year(),
            'numero_paginas' => $this->faker->numberBetween(1, 1000),
            'idioma' => $this->faker->word(),
            'editorial' => $this->faker->word(),
            'isbn' => $this->faker->isbn13(),
            'disponibilidad' => $this->faker->randomElement(['Disponible', 'Prestado', 'En Reparacion', 'Otro']),
            'ubicacion' => $this->faker->word(),
            'fk_id_categoria' => $this->faker->numberBetween(1, 10),
        ];
    }
}
