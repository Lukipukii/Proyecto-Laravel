<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->firstName(),
            'apellido'=>$this->faker->lastName(),
            'email'=>fake()->email(),
            'telefono'=>fake()->phoneNumber(),
            'direccion'=>fake()->address()
        ];
    }
}
