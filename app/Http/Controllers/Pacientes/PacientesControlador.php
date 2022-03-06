<?php

namespace App\Http\Controllers\Pacientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacientesControlador extends Controller
{
    public function index(){
        return view('pacientes.index');
    }
}
