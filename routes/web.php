<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('funcion');
});

Route::apiResource('pelicula',\App\Http\Controllers\PeliculaController::class);
Route::apiResource('funcion',\App\Http\Controllers\FuncionController::class);
