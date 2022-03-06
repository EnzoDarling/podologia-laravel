<?php

namespace App\Http\Controllers\Acceso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntrarControlador extends Controller
{
    public function index(){
        return view('acceso.entrar');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('status', 'Acceso Incorrecto');
        }

        return redirect()->route('inicio');
    }
}
