<?php

use App\Http\Controllers\MobiliarioController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\AulaController;
use Illuminate\Support\Facades\Route;

// Mobiliario
Route::apiResource('mobiliarios', MobiliarioController::class);

// Edificio
Route::apiResource('edificios', EdificioController::class);

// Aula
Route::apiResource('aulas', AulaController::class);