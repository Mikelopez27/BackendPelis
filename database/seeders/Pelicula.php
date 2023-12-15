<?php

namespace Database\Seeders;

use App\Models\pelicula as ModelsPelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Pelicula extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsPelicula::create([
            'titulo' => 'Jurassic Park',
            'duracion' => 127,
            'sinopsis' => 'Parque Jurásico es una película de ciencia ficción y aventuras dirigida por Steven Spielberg.',
            'id_cate' => 1, // ID de la categoría de Ciencia ficción
            'id_dire' => 1, // ID del director Steven Spielberg
        ]);

        ModelsPelicula::create([
            'titulo' => 'Taxi Driver',
            'duracion' => 113,
            'sinopsis' => 'Taxi Driver es una película dramática dirigida por Martin Scorsese.',
            'id_cate' => 2, // ID de la categoría de Drama
            'id_dire' => 2, // ID del director Martin Scorsese
        ]);

        ModelsPelicula::create([
            'titulo' => 'Pulp Fiction',
            'duracion' => 154,
            'sinopsis' => 'Pulp Fiction es una película de crimen y drama dirigida por Quentin Tarantino.',
            'id_cate' => 3, // ID de la categoría de Comedia
            'id_dire' => 3, // ID del director Quentin Tarantino
        ]);

        ModelsPelicula::create([
            'titulo' => 'Inception',
            'duracion' => 148,
            'sinopsis' => 'Inception es una película de ciencia ficción y acción dirigida por Christopher Nolan.',
            'id_cate' => 1, // ID de la categoría de Ciencia ficción
            'id_dire' => 4, // ID del director Christopher Nolan
        ]);

        ModelsPelicula::create([
            'titulo' => 'Psycho',
            'duracion' => 109,
            'sinopsis' => 'Psycho es una película de suspenso dirigida por Alfred Hitchcock.',
            'id_cate' => 5, // ID de la categoría de Suspense
            'id_dire' => 5, // ID del director Alfred Hitchcock
        ]);
    }
}
