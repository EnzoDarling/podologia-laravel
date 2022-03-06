<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioControlador;
use App\Http\Controllers\Acceso\SalirControlador;
use App\Http\Controllers\Acceso\EntrarControlador;
use App\Http\Controllers\Acceso\RegistroControlador;
use App\Http\Controllers\Pacientes\PacientesControlador;


Route::get('/inicio', [InicioControlador::class, 'index'])->name('inicio');

Route::post('/salir', [SalirControlador::class, 'store'])->name('salir');

Route::get('/entrar', [EntrarControlador::class, 'index'])->name('entrar');
Route::post('/entrar', [EntrarControlador::class, 'store']);

Route::get('/registro', [RegistroControlador::class, 'index'])->name('registro');
Route::post('/registro', [RegistroControlador::class, 'store']);

Route::get('/pacientes', [PacientesControlador::class, 'index'])->name('pacientes')
->middleware('auth');

Route::get('/fichas', function () {
    return view('fichas.index');
})->name('fichas')
->middleware('auth');
