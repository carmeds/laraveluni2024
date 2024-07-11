<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreempresa'=>fake()->company(),
            'nombrecontacto'=>fake()->firstName(),
            'cargocontacto'=>fake()->jobTitle(),
            'direccion'=>fake()->address(),
            'ciudad'=>fake()->city(),
            'ciudad'=>fake()->city(),
            'region'=>fake()->city(),
            'codigopostal'=>fake()->postcode(),
            'pais'=>fake()->country(),
            'telefono'=>fake()->phoneNumber(),
            'fax'=>fake()->phoneNumber(),
        ];
    }
}
