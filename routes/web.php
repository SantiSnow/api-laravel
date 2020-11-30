<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datosController;
use App\Models\personajes;
use App\Http\Controllers\insertController;
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

Route::get('/personajes', [datosController::class, 'returnDatos']);

Route::get('/planetas', [datosController::class, 'returnPlanetas']);

Route::get('/personaje/{id}', [datosController::class, 'returnPersonaje']);

Route::get('/planeta/{id}', [datosController::class, 'returnPlaneta']);

Route::post('/personaje', [insertController::class, 'insertPersonaje']);
