@extends('app')

@section('content')
<div class="container">
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Busque aqu&iacute;</div>
                @if ( auth()->user()->hasRole('admin'))
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-check d-flex flex-wrap justify-content-around mt-4 mb-4 px-auto">
                        <div class="form-check mr-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onclick="mostrarEstudiante()" checked>
                            <label class="form-check-label mr-2" for="flexRadioDefault1">
                                Estudiante
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onclick="mostrarEstudiante()">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Profesor
                            </label>
                        </div>
                    </div>
                    <form class="d-flex" action="{{ route('estudiantesEPN') }}" method="POST">
                        @csrf                    
                        @auth
                        <input class="form-control me-2" type="search" placeholder="Coloque la EPN del Estudiante" aria-label="Search" name="busqueda" id="busquedaEstudiante">
                        <button class="btn btn-outline-primary" type="submit" id="btnBusquedaEstudiante">Buscar</button>
                        @endauth        
                    </form>
                    <form class="d-flex" action="{{ route('profesoresEPN') }}" method="POST">
                        @csrf
                        @auth
                        <input class="form-control me-2" type="search" placeholder="Coloque la EPN del Profesor" aria-label="Search" name="busqueda" id="busquedaProfesor" hidden>
                        <button class="btn btn-outline-primary" type="submit" id="btnBusquedaProfesor" hidden>Buscar</button>
                        @endauth        
                    </form> 
                </div>
                    @else
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="text-center">No cuenta con los permisos para esta secci??n.</h4>
                    </div>
                @endif                
            </div>
        </div>
    </div> -->
</div>
<!-- <script>
    function mostrarEstudiante(){
        var checkedEstudiante = document.getElementById('flexRadioDefault1').checked;
        var busquedaEstudiante = document.getElementById('busquedaEstudiante');
        var btnBusquedaEstudiante = document.getElementById('btnBusquedaEstudiante');
        var busquedaProfesor = document.getElementById('busquedaProfesor');
        var btnBusquedaProfesor = document.getElementById('btnBusquedaProfesor');

        if(checkedEstudiante){// Este if sirve para saber si esta marcado el check que significa que es un Estudiante            
            busquedaEstudiante.removeAttribute("hidden");
            btnBusquedaEstudiante.removeAttribute("hidden");

            busquedaProfesor.setAttribute("hidden", "true");
            btnBusquedaProfesor.setAttribute("hidden", "true");
        }
        if(!checkedEstudiante){// Este if sirve para saber si esta marcado el check que significa que es un Profesor 
            busquedaProfesor.removeAttribute("hidden");
            btnBusquedaProfesor.removeAttribute("hidden");

            busquedaEstudiante.setAttribute("hidden", "true");
            btnBusquedaEstudiante.setAttribute("hidden", "true");
        }        
    }    
</script> -->
@endsection
