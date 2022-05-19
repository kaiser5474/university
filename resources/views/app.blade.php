<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .color-container{
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }
        a{
            text-decoration: none;
        }
        
        @media (min-width: 992px){
        .navbar-expand-lg .navbar-collapse{
            display: flex!important;
            flex-basis: auto;
            justify-content: flex-end;
        }}

        .btn-outline-dark {
            margin-left: 10px;
        }        
    </style>
</head>
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