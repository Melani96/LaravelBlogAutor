<?php

use App\Http\Controllers\biografiaController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\librosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\entradasController;
use App\Http\Controllers\libroController;
use App\Http\Controllers\comprarController;
use App\Http\Controllers\sugerenciaController;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [indexController::class, 'mostrarEntradas'])->name('Home');

Route::post('/', [entradasController::class, 'store'])->name('Home');

Route::get('/biografia', [biografiaController::class, 'mostrarBiografia'])->name('Biografia');

Route::get('/publicados', [librosController::class, 'mostrarLibros'])->name('Publicados');

Route::get('libro/{id}', [libroController::class, 'idLibro'])->name('Libro');

Route::post('libro/{id}', [comprarController::class, 'store'])->name('Libro');

Route::get('/sugerencias', function () {return view('sugerencia');})->name('Sugerencias');

Route::post('/sugerencia', [sugerenciaController::class, 'enviarSugerencia']);
