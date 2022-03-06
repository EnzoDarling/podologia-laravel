@extends('layouts.app')

@section('content')
<div class="bg-white p-4 my-5 rounded">
  <h1>Entrar</h1>
  @if (session('status'))
    <div class="alert alert-danger">
      {{session('status')}}
    </div>
  @endif
  <form action="{{route('entrar')}}" method="POST">
    @csrf
    <div class="form-group my-2">
      <label for="email">Correo Electrónico</label>
      <input type="email" name="email" id="email" class="form-control @error('email') border border-danger @enderror" aria-describedby="emailHelp" placeholder="Ingrese su correo" value="{{ old('email')}}">
      @error('email')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group my-2">
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" class="form-control @error('password') border border-danger @enderror" placeholder="Ingrese su contraseña">
      @error('password')
        <div class="text-danger">{{$message}}</div>
      @enderror
    </div>
    <div class="form-check my-2">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Recordarme</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
@endsection