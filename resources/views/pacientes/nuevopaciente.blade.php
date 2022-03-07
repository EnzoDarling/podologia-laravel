@extends('layouts.app')

@section('content')
<div class="bg-white p-4 my-5 rounded">
  <h1>Crear Paciente</h1>
  <form action="{{route('nuevaficha')}}" method="POST">
    @csrf
    <div class="form-group mt-4">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" id="apellido" class="form-control @error('name') border border-danger @enderror" placeholder="Apellido del Paciente" value="{{ old('apellido') }}">
      @error('apellido')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control @error('username') border border-danger @enderror" placeholder="Nombre del Paciente" value="{{ old('nombre')}}">
      @error('nombre')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="edad">Edad</label>
      <input type="text" name="edad" id="edad" class="form-control @error('nombre') border border-danger @enderror" placeholder="Edad del Paciente" value="{{ old('edad')}}">
      @error('edad')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="direccion">Dirección</label>
      <input type="text" name="direccion" id="direccion" class="form-control @error('direccion') border border-danger @enderror" placeholder="Dire del Paciente" value="{{ old('direccion')}}">
      @error('direccion')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="telefono">Telefono Celular</label>
      <input type="text" name="telefono" id="telefono" class="form-control @error('telefono') border border-danger @enderror" placeholder="Tel del Paciente" value="{{ old('telefono')}}">
      @error('telefono')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>  
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
  </form>
</div>
@endsection