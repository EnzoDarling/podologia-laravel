<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_apellido',
        'paciente_nombre',
        'paciente_edad',
        'paciente_dire',
        'paciente_tel'
    ];
}
