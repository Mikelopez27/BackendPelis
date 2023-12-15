<?php

namespace App\Http\Controllers;

use App\Models\pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        return response()->json(Pelicula::all(), 200);
    }

    public function show($id)
    {
        $pelicula = Pelicula::find($id);
        if (!$pelicula) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }
        return response()->json($pelicula, 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|max:255',
            'duracion' => 'nullable|integer',
            'sinopsis' => 'nullable',
            'id_cate' => 'required|exists:categorias,id_cate',
            'id_dire' => 'required|exists:directors,id_dire',
        ]);

        $pelicula = Pelicula::create($data);

        return response()->json(['message' => 'Película creada exitosamente', 'pelicula' => $pelicula], 201);
    }

    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);
        if (!$pelicula) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }

        $data = $request->validate([
            'titulo' => 'required|max:255',
            'duracion' => 'nullable|integer',
            'sinopsis' => 'nullable',
            'id_cate' => 'required|exists:categorias,id_cate',
            'id_dire' => 'required|exists:directors,id_dire',
        ]);

        $pelicula->update($data);

        return response()->json(['message' => 'Película actualizada exitosamente', 'pelicula' => $pelicula], 200);
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        if (!$pelicula) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }

        $pelicula->delete();

        return response()->json(['message' => 'Película eliminada exitosamente'], 200);
    }
}
