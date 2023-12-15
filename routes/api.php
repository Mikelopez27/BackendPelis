<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\DirectoresController;
use App\Http\Controllers\PeliculaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('directores')->group(function () {
    Route::get('/', [DirectoresController::class, 'index']);
    Route::get('/{id}', [DirectoresController::class, 'show']);
    Route::post('/', [DirectoresController::class, 'store']);
    Route::put('/{id}', [DirectoresController::class, 'update']);
    Route::delete('/{id}', [DirectoresController::class, 'destroy']);
});

Route::prefix('categorias')->group(function () {
    Route::get('/', [CategoriasController::class, 'index']);
    Route::get('/{id}', [CategoriasController::class, 'show']);
    Route::post('/', [CategoriasController::class, 'store']);
    Route::put('/{id}', [CategoriasController::class, 'update']);
    Route::delete('/{id}', [CategoriasController::class, 'destroy']);
});

Route::prefix('peliculas')->group(function () {
    Route::get('/', [PeliculaController::class, 'index']);
    Route::get('/{id}', [PeliculaController::class, 'show']);
    Route::post('/', [PeliculaController::class, 'store']);
    Route::put('/{id}', [PeliculaController::class, 'update']);
    Route::delete('/{id}', [PeliculaController::class, 'destroy']);
});
