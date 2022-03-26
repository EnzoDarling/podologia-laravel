@extends('layouts.app')

@section('content')
<div class="bg-white p-4 my-5 rounded">
  <h1>Crear Ficha Medica</h1>
  <form action="{{route('crearficha')}}" method="POST">
    @csrf
    <div class="form-group mt-4">
      <label for="apellido">Apellido</label>
      <input type="text" name="ficha_apellido" id="apellido" class="form-control @error('ficha_apellido') border border-danger @enderror" placeholder="Apellido del Paciente" value="{{ old('apellido') }}">
      @error('ficha_apellido')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="nombre">Nombre</label>
      <input type="text" name="ficha_nombre" id="nombre" class="form-control @error('ficha_nombre') border border-danger @enderror" placeholder="Nombre del Paciente" value="{{ old('nombre')}}">
      @error('ficha_nombre')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="edad">Edad</label>
      <input type="text" name="ficha_edad" id="edad" class="form-control @error('ficha_edad') border border-danger @enderror" placeholder="Edad del Paciente" value="{{ old('edad')}}">
      @error('ficha_edad')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="direccion">Dirección</label>
      <input type="text" name="ficha_direccion" id="direccion" class="form-control @error('ficha_direccion') border border-danger @enderror" placeholder="Dire del Paciente" value="{{ old('direccion')}}">
      @error('ficha_direccion')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group mt-4">
      <div class="form-check">
        <input type="checkbox" name="talonagr" id="talonagr" class="form-check-input @error('talonagr') border border-danger @enderror" value="{{ old('talonagr')}}">
        <label class="form-check-label" for="talonagr">Talon Agrietado</label>
        @error('talonagr')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="hiperhidrosis" id="hiperhidrosis" class="form-check-input @error('hiperhidrosis') border border-danger @enderror" value="{{ old('hiperhidrosis')}}">
        <label class="form-check-label" for="hiperhidrosis">Hiperhidrosis</label>
        @error('hiperhidrosis')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="micosis" id="micosis" class="form-check-input @error('micosis') border border-danger @enderror" value="{{ old('micosis')}}">
        <label class="form-check-label" for="micosis">Micosis</label>
        @error('micosis')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="anticuag" id="anticuag" class="form-check-input @error('anticuag') border border-danger @enderror" value="{{ old('anticuag')}}">
        <label class="form-check-label" for="anticuag">Anticuagulado</label>
        @error('anticuag')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="afecciones" id="afecciones" class="form-check-input @error('afecciones') border border-danger @enderror" value="{{ old('afecciones')}}">
        <label class="form-check-label" for="afecciones">Affeciones</label>
        @error('afecciones')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="edema" id="edema" class="form-check-input @error('edema') border border-danger @enderror" value="{{ old('edema')}}">
        <label class="form-check-label" for="edema">Edema</label>
        @error('edema')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="onicocrip" id="onicocrip" class="form-check-input @error('onicocrip') border border-danger @enderror" value="{{ old('onicocrip')}}">
        <label class="form-check-label" for="onicocrip">Onicocriptosis</label>
        @error('onicocrip')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="dbt" id="dbt" class="form-check-input @error('dbt') border border-danger @enderror" value="{{ old('dbt')}}">
        <label class="form-check-label" for="dbt">DBT</label>
        @error('dbt')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-check mt-4">
        <input type="checkbox" name="hiperquera" id="hiperquera" class="form-check-input @error('hiperquera') border border-danger @enderror" value="{{ old('hiperquera')}}">
        <label class="form-check-label" for="hiperquera">Hiperqueratosis</label>
        @error('hiperquera')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
    </div>   
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
  </form>
</div>
@endsection