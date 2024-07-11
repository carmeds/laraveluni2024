<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pais>
 */
class PaisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codpais'=>fake()->lexify(),
            'pais'=>fake()->country(),
            'capital'=>fake()->city(),
            'area'=>fake()->randomFloat(2),
            'poblacion'=>fake()->numberBetween(2000000,3000000),
            'continente'=>fake()->tld(),
        ];
    }
}
