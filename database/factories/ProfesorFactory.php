<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni'=> $this->generarDNI(),
            'nombre'=>fake()->firstName(),
            'apellido'=>$this->faker->lastName(),
            'email'=>fake()->safeEmail(),
            'departamento'=>$this->faker->randomElement(['Entornos de Desarrollo', 'Programación', 'BBDD', 'Inglés', 'FOL', 'LMS', 'Sistemas'])
        ];
    }

    private function generarDNI(): string {
        $num = rand(0, 99999999);
        $letraDNI = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
        return sprintf("%08d", $num) . $letraDNI[$num%23];
    }
}
