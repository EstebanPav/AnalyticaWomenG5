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
Route::resource('clientes',App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('generos',App\Http\Controllers\GeneroController::class)->middleware('auth');
Route::resource('empleos',App\Http\Controllers\EmpleoController::class)->middleware('auth');
Route::resource('servicios',App\Http\Controllers\ServicioController::class)->middleware('auth');
Route::resource('cursoscaps',App\Http\Controllers\CursoscapController::class)->middleware('auth');
Route::resource('pagos',App\Http\Controllers\PagoController::class)->middleware('auth');
Route::resource('provincias',App\Http\Controllers\ProvinciaController::class)->middleware('auth');
Route::resource('ciudades',App\Http\Controllers\CiudadeController::class)->middleware('auth');
Route::resource('eventos',App\Http\Controllers\EventoController::class)->middleware('auth');
Route::resource('redsocials',App\Http\Controllers\RedsocialController::class)->middleware('auth');
Route::resource('contactos',App\Http\Controllers\ContactoController::class)->middleware('auth');
Route::resource('informacions',App\Http\Controllers\InformacionController::class)->middleware('auth');
Route::resource('comentarios',App\Http\Controllers\ComentarioController::class)->middleware('auth');
Route::resource('blogs',App\Http\Controllers\BlogController::class)->middleware('auth');
Route::resource('categorias',App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route Hooks - Do not delete//