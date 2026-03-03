<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('hola');

/*
    echo "<!DOCTYPE html>";
    echo '<html lang="en">';
    echo "<head>";
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo "<title>Document</title>";
    echo "</head>";
    echo "<body>";
        echo "HOLA BIENVENIDO2";
    echo "</body>";
    echo "</html>";
*/

//    return view('welcome');
});