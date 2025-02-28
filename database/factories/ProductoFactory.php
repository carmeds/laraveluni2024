<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ruta='images/productos/';
        return [
            'nombre'=>fake()->word(),
            'precio'=>fake()->randomFloat(2),
            'imagenchica'=>$ruta.'foto00.jpg',
            'preciorebajado'=>fake()->randomDigitNotNull(),
            'categoria_id'=>Categoria::inRandomOrder()->first()->id,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ];
    }
}
