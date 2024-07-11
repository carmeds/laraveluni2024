<?php

namespace Database\Seeders;

use App\Models\Envio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Envio::factory(10)->create();

    }
}
