@extends('layouts.app')

@section('content')
<div class="bg-white p-4 my-5 rounded">
  <h1>{{$paciente->paciente_apellido, $paciente_nombre}}</h1>
</div>
@endsection