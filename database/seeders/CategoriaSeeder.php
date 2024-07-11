<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nombre'=>'Bebidas',
            'descripcion'=>'Gaseosas, cafe, te, cervezas y maltas',
            'total'=>15.6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Carnes',
            'descripcion'=>'Carnes Preparadas',
            'total'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Condimentos',
            'descripcion'=>'Salsas dulces y picantes, delicias, comida para untar',
            'total'=>11,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Frutas/Verduras',
            'descripcion'=>'Frutas secas y queso de soya',
            'total'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Granos/Cereales',
            'descripcion'=>'Pan, galletas, pasta y cereales',
            'total'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Lacteos',
            'descripcion'=>'Quesos, leches y yogures frescos',
            'total'=>11,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('categorias')->insert([
            'nombre'=>'Pescados/Mariscos',
            'descripcion'=>'Pescados, mariscos y algas',
            'total'=>12,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

    }
}
