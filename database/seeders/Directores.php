<?php

namespace Database\Seeders;

use App\Models\directores as ModelsDirectores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Directores extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsDirectores::create(['director' => 'Steven Spielberg']);
        ModelsDirectores::create(['director' => 'Martin Scorsese']);
        ModelsDirectores::create(['director' => 'Quentin Tarantino']);
        ModelsDirectores::create(['director' => 'Christopher Nolan']);
        ModelsDirectores::create(['director' => 'Alfred Hitchcock']);
    }
}
