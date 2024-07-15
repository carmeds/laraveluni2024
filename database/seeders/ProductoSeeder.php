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
        $ruta='images/productos/';

        DB::table('productos')->insert([
            'nombre'=>'Te Dharamsala',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto01.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Coca cola',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto02.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Inca Kola',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto03.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Fanta',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto04.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cerveza Cristal',
            'precio'=>6,
            'imagenchica'=>$ruta.'foto05.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cerveza Pilsen',
            'precio'=>6,
            'imagenchica'=>$ruta.'foto06.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cerveza Tres cruces',
            'precio'=>4,
            'imagenchica'=>$ruta.'foto07.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cafe Kirma',
            'precio'=>1.5,
            'imagenchica'=>$ruta.'foto08.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cafe Nescafe',
            'precio'=>8,
            'imagenchica'=>$ruta.'foto09.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cafe Altomayo',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto10.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Cafetal',
            'precio'=>8,
            'imagenchica'=>$ruta.'foto11.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Gaseosa Kola Real',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto12.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Gaseosa Pepsi',
            'precio'=>1.5,
            'imagenchica'=>$ruta.'foto13.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne de Res',
            'precio'=>18,
            'imagenchica'=>$ruta.'foto14.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne Molida',
            'precio'=>15,
            'imagenchica'=>$ruta.'foto15.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Pollo fresco',
            'precio'=>8,
            'imagenchica'=>$ruta.'foto16.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Pescado fresco',
            'precio'=>6,
            'imagenchica'=>$ruta.'foto17.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Lata de atun',
            'precio'=>5,
            'imagenchica'=>$ruta.'foto18.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Caballa',
            'precio'=>5,
            'imagenchica'=>$ruta.'foto19.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne de Cerdo',
            'precio'=>12,
            'imagenchica'=>$ruta.'foto20.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne de Conejo',
            'precio'=>16,
            'imagenchica'=>$ruta.'foto21.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne de Cuy',
            'precio'=>15,
            'imagenchica'=>$ruta.'foto22.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne de Pavita',
            'precio'=>20,
            'imagenchica'=>$ruta.'foto23.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne de Carnero',
            'precio'=>18,
            'imagenchica'=>$ruta.'foto24.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Carne de Pato',
            'precio'=>20,
            'imagenchica'=>$ruta.'foto25.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Sazonador Sibarita',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto26.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Pimienta Sibarita',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto27.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Comino Sibarita',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto28.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Tuco tallarin Sibarita',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto29.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Sazonador Lopesa',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto30.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Pimienta Lopesa',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto31.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Oregano Lopesa',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto32.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Comino Lopesa',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto33.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Ajinomoto',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto34.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Deli arroz',
            'precio'=>1,
            'imagenchica'=>$ruta.'foto35.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Kilo de Naranja',
            'precio'=>2,
            'imagenchica'=>$ruta.'foto36.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Mano de Platano',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto37.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Manzana Chilena',
            'precio'=>3.5,
            'imagenchica'=>$ruta.'foto38.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Manzana de agua',
            'precio'=>4,
            'imagenchica'=>$ruta.'foto39.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Piña',
            'precio'=>3.5,
            'imagenchica'=>$ruta.'foto40.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Papaya',
            'precio'=>4,
            'imagenchica'=>$ruta.'foto41.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Maracuya',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto42.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Mango',
            'precio'=>4,
            'imagenchica'=>$ruta.'foto43.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Sandia',
            'precio'=>4,
            'imagenchica'=>$ruta.'foto44.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Lucuma',
            'precio'=>7,
            'imagenchica'=>$ruta.'foto45.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Fresa',
            'precio'=>5,
            'imagenchica'=>$ruta.'foto46.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Saco de arroz Faraon',
            'precio'=>200,
            'imagenchica'=>$ruta.'foto47.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Saco de arroz Caserita',
            'precio'=>180,
            'imagenchica'=>$ruta.'foto48.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Saco de arroz Paisana',
            'precio'=>220,
            'imagenchica'=>$ruta.'foto49.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Saco de arroz El caporal',
            'precio'=>190,
            'imagenchica'=>$ruta.'foto50.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Saco de azucar Casagrande',
            'precio'=>200,
            'imagenchica'=>$ruta.'foto51.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Saco de azucar Cartavio',
            'precio'=>190,
            'imagenchica'=>$ruta.'foto52.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Saco de azucar Paramonga',
            'precio'=>220,
            'imagenchica'=>$ruta.'foto53.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Fideo Don victorio',
            'precio'=>2,
            'imagenchica'=>$ruta.'foto54.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre'=>'Aceite Primor',
            'precio'=>8,
            'imagenchica'=>$ruta.'foto55.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Aceite Bells',
            'precio'=>7,
            'imagenchica'=>$ruta.'foto56.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Six Pack Leche Gloria',
            'precio'=>20,
            'imagenchica'=>$ruta.'foto57.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Six Pack Leche Ideal',
            'precio'=>21,
            'imagenchica'=>$ruta.'foto58.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Six Pack Leche Pura vida',
            'precio'=>18,
            'imagenchica'=>$ruta.'foto59.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Six Pack Leche Bonle',
            'precio'=>19,
            'imagenchica'=>$ruta.'foto60.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Yogurt Gloria 1L',
            'precio'=>8,
            'imagenchica'=>$ruta.'foto61.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Yogurt Laive 1L',
            'precio'=>9,
            'imagenchica'=>$ruta.'foto62.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Yogurt Sbelt 1L',
            'precio'=>10,
            'imagenchica'=>$ruta.'foto63.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Yogurt Gloria Griego 1L',
            'precio'=>10,
            'imagenchica'=>$ruta.'foto64.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Queso Gloria',
            'precio'=>7,
            'imagenchica'=>$ruta.'foto65.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Queso Laive edam',
            'precio'=>10,
            'imagenchica'=>$ruta.'foto66.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Queso Bonle',
            'precio'=>8,
            'imagenchica'=>$ruta.'foto67.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Mantequilla Gloria',
            'precio'=>16,
            'imagenchica'=>$ruta.'foto68.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Mantequilla Laive',
            'precio'=>15,
            'imagenchica'=>$ruta.'foto69.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Mantequilla Manty',
            'precio'=>6,
            'imagenchica'=>$ruta.'foto70.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Mariscos Mixtura',
            'precio'=>25,
            'imagenchica'=>$ruta.'foto71.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Filete pescado Bells',
            'precio'=>23,
            'imagenchica'=>$ruta.'foto72.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Pescado Jurel',
            'precio'=>5,
            'imagenchica'=>$ruta.'foto73.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Pejerrey',
            'precio'=>3,
            'imagenchica'=>$ruta.'foto74.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre'=>'Choros',
            'precio'=>5,
            'imagenchica'=>$ruta.'foto75.jpg',
            'preciorebajado'=>0,
            'categoria_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        Producto::factory(30)->create();
    }
}
