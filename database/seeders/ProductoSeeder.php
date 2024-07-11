<?php

namespace Database\Seeders;

use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'nombre'=>'Te Dharamsala',
            'precio'=>18,
            'imagenchica'=>'imagenes/imch/foto01.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        Producto::factory(100)->create();
    }
}
