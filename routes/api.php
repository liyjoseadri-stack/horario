<?php

use App\Http\Controllers\MobiliarioController;
use App\Http\Controllers\EdificioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí registramos todas las rutas de la API.
|
*/

// Ruta de usuario autenticado (por defecto)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Rutas para Mobiliario
|--------------------------------------------------------------------------
*/
Route::get('mobiliarios', [MobiliarioController::class, 'index'])->name('mobiliario.index');
Route::post('mobiliarios', [MobiliarioController::class, 'store'])->name('mobiliario.store');
Route::get('mobiliarios/{mobiliario}', [MobiliarioController::class, 'show'])->name('mobiliario.show');
Route::put('mobiliarios/{mobiliario}', [MobiliarioController::class, 'update'])->name('mobiliario.update');
Route::delete('mobiliarios/{mobiliario}', [MobiliarioController::class, 'destroy'])->name('mobiliario.destroy');

/*
|--------------------------------------------------------------------------
| Rutas para Edificio
|--------------------------------------------------------------------------
*/
Route::get('edificios', [EdificioController::class, 'index'])->name('edificio.index');
Route::post('edificios', [EdificioController::class, 'store'])->name('edificio.store');
Route::get('edificios/{edificio}', [EdificioController::class, 'show'])->name('edificio.show');
Route::put('edificios/{edificio}', [EdificioController::class, 'update'])->name('edificio.update');
Route::delete('edificios/{edificio}', [EdificioController::class, 'destroy'])->name('edificio.destroy');