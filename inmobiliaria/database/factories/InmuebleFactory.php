<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inmueble>
 */
class InmuebleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->paragraph(),
            'direccion' => $this->faker->sentence(),
            'poblacion'=> $this->faker->paragraph(),
            'precio'=> $this->faker->numberBetween(100000,1000000),
            'metrosCuadrados'=> $this->faker->numberBetween(50,300),
            'imagen' => $this->faker->randomElement(['imagenes/img1.png','imagenes/img2.png']),
        ];
    }
}
