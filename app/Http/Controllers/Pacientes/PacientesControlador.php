<?php

namespace App\Http\Controllers\Pacientes;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PacientesControlador extends Controller
{   
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        $pacientes = Paciente::get();
        return view('pacientes.index', [
            'pacientes' => $pacientes
        ]);
    }
    public function nuevopaciente(){
        return view('pacientes.nuevopaciente');
    }
    public function crearpaciente(Request $request){
        $this->validate($request, [
            'apellido'=>'required|max:255',
            'nombre'=>'required|max:255',
            'edad'=>'required|max:255',
            'direccion'=>'required|max:255',
            'telefono'=>'required|max:255',
        ]);
        Paciente::create([
            'paciente_apellido' => $request->apellido,
            'paciente_nombre' => $request->nombre,
            'paciente_edad' => $request->edad,
            'paciente_dire' => $request->direccion,
            'paciente_tel' => $request->telefono
        ]);
        return redirect()->route('pacientes');
    }
}
