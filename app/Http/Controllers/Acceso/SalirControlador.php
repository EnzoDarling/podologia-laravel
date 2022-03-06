<?php

namespace App\Http\Controllers\Acceso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalirControlador extends Controller
{
    public function store(){
        auth()->logout();
        return redirect()->route('inicio');
    }
}
