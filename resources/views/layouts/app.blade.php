<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}" >
  <title>Podologia</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('inicio')}}">Sandra</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pacientes')}}">Pacientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('fichas')}}">Fichas</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          @auth
          <li class="nav-item">
            <a class="nav-link" href="">{{ auth()->user()->name}}</a>
          </li>
          <li class="nav-item">
            <form action="{{ route('salir') }}" method="post">
              @csrf
              <button type="submit" class="btn btn-danger">Salir</button>
            </form>
          </li>
          @endauth
          @guest
            <li class="nav-item nav-acceso">
              <a class="btn btn-light" href="{{route('entrar')}}">Entrar</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-light nav-acceso" href="{{route('registro')}}">Registro</a>
            </li>
          @endguest
        </ul>
      </div>
      
    </div>
  </nav>
  <section class="container align-items-center">
    @yield('content')
  </section>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>