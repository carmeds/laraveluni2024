<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'apellidos'=>fake()->lastName(),
            'nombres'=>fake()->firstName(),
            'cargo'=>fake()->jobTitle(),
            'tratamiento'=>fake()->titleMale(),
            'fechanacimiento'=>fake()->date(),
            'fechacontratacion'=>fake()->date(),
            'direccion'=>fake()->address(),
            'ciudad'=>fake()->city(),
            'usuario'=>fake()->firstName(),
            'codigopostal'=>fake()->postcode(),
            'pais'=>fake()->country(),
            'telefono'=>fake()->phoneNumber(),
            'clave'=>fake()->randomNumber(5,true),
            'clave'=>fake()->randomNumber(5,true),
            'foto'=>'foto'.fake()->randomDigit().'.jpg',
            'jefe'=>fake()->randomDigit(),
        ];
    }
}
