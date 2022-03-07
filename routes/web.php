<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioControlador;
use App\Http\Controllers\Acceso\SalirControlador;
use App\Http\Controllers\Acceso\EntrarControlador;
use App\Http\Controllers\Fichas\FichasControlador;
use App\Http\Controllers\Acceso\RegistroControlador;
use App\Http\Controllers\Pacientes\PacientesControlador;

//INICIO
Route::get('/inicio', [InicioControlador::class, 'index'])->name('inicio');
//DESCONECTARSE
Route::post('/salir', [SalirControlador::class, 'store'])->name('salir');

//INGRESO
Route::get('/entrar', [EntrarControlador::class, 'index'])->name('entrar');
Route::post('/entrar', [EntrarControlador::class, 'store']);

//REGISTRO
Route::get('/registro', [RegistroControlador::class, 'index'])->name('registro');
Route::post('/registro', [RegistroControlador::class, 'store']);

//FICHAS
Route::get('/fichas', [FichasControlador::class, 'index'])->name('fichas');
Route::get('/nuevaficha', [FichasControlador::class, 'nuevaficha'])->name('nuevaficha');
Route::post('/nuevaficha', [FichasControlador::class, 'crearficha']);

//PACIENTES
Route::get('/pacientes', [PacientesControlador::class, 'index'])->name('pacientes')
->middleware('auth');

Route::get('/fichas', function () {
    return view('fichas.index');
})->name('fichas')
->middleware('auth');
