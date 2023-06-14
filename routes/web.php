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
    return view('welcome');
});

Auth::routes();
Route::resource('clientes',App\Http\Controllers\ClienteController::class);
Route::resource('generos',App\Http\Controllers\GeneroController::class);
Route::resource('empleos',App\Http\Controllers\EmpleoController::class);
Route::resource('servicios',App\Http\Controllers\ServicioController::class);
Route::resource('cursoscaps',App\Http\Controllers\CursoscapController::class);
Route::resource('pagos',App\Http\Controllers\PagoController::class);
Route::resource('provincias',App\Http\Controllers\ProvinciaController::class);
Route::resource('ciudades',App\Http\Controllers\CiudadeController::class);
Route::resource('eventos',App\Http\Controllers\EventoController::class);
Route::resource('redsocials',App\Http\Controllers\RedsocialController::class);
Route::resource('contactos',App\Http\Controllers\ContactoController::class);
Route::resource('informacions',App\Http\Controllers\InformacionController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//