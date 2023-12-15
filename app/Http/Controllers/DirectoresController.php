<?php

namespace App\Http\Controllers;

use App\Models\directores;
use Illuminate\Http\Request;

class DirectoresController extends Controller
{
    public function index()
    {
        return response()->json(Directores::all(), 200);
    }

    public function show($id)
    {
        $director = Directores::find($id);
        if (!$director) {
            return response()->json(['message' => 'Director no encontrado'], 404);
        }
        return response()->json($director, 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'director' => 'required|max:255',
        ]);

        $director = Directores::create($data);

        return response()->json(['message' => 'Director creado exitosamente', 'director' => $director], 201);
    }

    public function update(Request $request, $id)
    {
        $director = Directores::find($id);
        if (!$director) {
            return response()->json(['message' => 'Director no encontrado'], 404);
        }

        $data = $request->validate([
            'director' => 'required|max:255',
        ]);

        $director->update($data);

        return response()->json(['message' => 'Director actualizado exitosamente', 'director' => $director], 200);
    }

    public function destroy($id)
    {
        $director = directores::find($id);
        if (!$director) {
            return response()->json(['message' => 'Director no encontrado'], 404);
        }

        $director->delete();

        return response()->json(['message' => 'Director eliminado exitosamente'], 200);
    }
}
