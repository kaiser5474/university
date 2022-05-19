@extends('head')
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Universidad</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="{{ Request::is('estudiantes') ? 'nav-link active text-primary' : 'nav-link' }}" aria-current="page" href="/estudiantes">Estudiantes</a>
        <a class="{{ Request::is('profesores') ? 'nav-link active text-primary' : 'nav-link' }}" href="/profesores">Profesores</a>
        @if ( auth()->user()->hasRole('admin'))
          <a class="{{ Request::is('crear-usuario') ? 'nav-link active text-primary' : 'nav-link' }}" href="/crear-usuario">Crear Usuario</a>
        @endif
        @if ( auth()->user()->hasRole('estudiante'))
          <a class="{{ Request::is('nuevo-formulario') ? 'nav-link active text-primary' : 'nav-link' }}" href="/nuevo-formulario">Nuevo Formulario</a>
        @endif
      </div>  
         
      @auth      
        <div class="mr-4 text-dark">
            Hola: {{auth()->user()->name}}
          </div>
          
          <div class="float-end ml-2 w-full">
            <a href="{{ route('logout.perform') }}" class="btn btn-outline-dark">Logout</a>
          </div>       
      @endauth
    </div>    
  </div>
</nav>
        @yield('content')
</body>
</html>