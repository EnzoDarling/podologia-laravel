<?php

namespace App\Http\Controllers\Fichas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FichasControlador extends Controller
{   
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        return view('fichas.index');
    }
    public function nuevaficha(){
        return view('fichas.crearfichas');
    }
    public function crearficha(Request $request){
        $this->validate($request, [
            'ficha_apellido' => 'required|max:255',
            'ficha_nombre' => 'required|max:255',
            'ficha_edad' => 'required|max:2',
            'ficha_direccion' => 'required|max:255',
        ]);
    }
}
