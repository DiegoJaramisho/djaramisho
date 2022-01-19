<?php

use App\Http\Controllers\IntentoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PremioController;
use App\Http\Controllers\RondaPreguntaIntentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('validarIntento', DepartamentoController::class);
// Route::resource('rondas', DepartamentoController::class);
Route::resource('jugador', JugadorController::class);
Route::resource('intento', IntentoController::class);
Route::resource('historial', PremioController::class);
Route::post('respuesta', [IntentoController::class, 'respuesta']);
Route::post('salir', [IntentoController::class, 'salir']);
// Route::resource('respuesta', RondaPreguntaIntentoController::class);
