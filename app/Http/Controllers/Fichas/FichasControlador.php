<?php

namespace App\Http\Controllers\Fichas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FichasControlador extends Controller
{
    public function index(){
        return view('fichas.index');
    }
    public function nuevaficha(){
        return view('fichas.crearfichas');
    }
    public function crearficha(Request $request){
        dd($request->hiperhidrosis);
    }
}
