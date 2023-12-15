<?php

namespace Database\Seeders;

use App\Models\categorias as ModelsCategorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsCategorias::create(['categoria' => 'Acción']);
        ModelsCategorias::create(['categoria' => 'Drama']);
        ModelsCategorias::create(['categoria' => 'Comedia']);
        ModelsCategorias::create(['categoria' => 'Ciencia ficción']);
        ModelsCategorias::create(['categoria' => 'Suspense']);
    }
}
