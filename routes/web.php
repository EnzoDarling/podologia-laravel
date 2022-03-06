<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioControlador;
use App\Http\Controllers\Acceso\EntrarControlador;
use App\Http\Controllers\Acceso\RegistroControlador;

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
Route::get('/inicio', [InicioControlador::class, 'index'])->name('inicio');

Route::get('/entrar', [EntrarControlador::class, 'index'])->name('entrar');
Route::post('/entrar', [EntrarControlador::class, 'store']);

Route::get('/registro', [RegistroControlador::class, 'index'])->name('registro');
Route::post('/registro', [RegistroControlador::class, 'store']);

Route::get('/fichas', function () {
    return view('fichas.index');
});
