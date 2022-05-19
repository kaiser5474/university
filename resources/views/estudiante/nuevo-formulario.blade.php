@extends('app')

@section('content')   
    
    <div class="card mx-4 mb-4">
        <form action="{{ route('estudiantes.insert') }}" method="POST">
        @csrf 
            <div class="card-header">
                <h2>Nuevo Formulario</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="mb-3 bg-success bg-gradient p-2 text-white">
                        <label for="carrera" class="form-label">Carrera</label>
                    </div>
                        <input type="text" class="form-control" id="carrera" name="carrera" value="">               
                </li>
                <li class="list-group-item card-header">
                    <div  class="bg-success bg-gradient p-2 text-white">
                        1- Actividades para las que solicita la convalidación
                    </div>
                </li>
                <li class="list-group-item">
                    <div  class="mb-3 bg-success bg-gradient p-2 text-white">
                        2- Datos del estudiante
                    </div>
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="" readonly="readonly">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">C&eacute;dula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="" readonly="readonly">
                    </div>            
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Tel&eacute;fono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="">
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" value="">
                    </div>        
                </li>
                <li class="list-group-item">
                    <div  class="mb-3 bg-success bg-gradient p-2 text-white">
                        3- Documentación de soporte adjunta
                    </div>               
                </li>
                <li class="list-group-item">
                    <div  class="mb-3 bg-success bg-gradient p-2 text-white">
                        4- Información de la institución en la que realizó las actividades
                    </div>               
                </li>
                <li class="list-group-item">
                    <div  class="mb-3 bg-success bg-gradient p-2 text-white">
                        5- Información de las actividades realizadas
                    </div>               
                </li>
                <li class="list-group-item">
                    <div  class="mb-3 bg-success bg-gradient p-2 text-white">
                        6- Información Adicional
                    </div>               
                </li>
                <li class="list-group-item">
                    <div  class="mb-3 bg-success bg-gradient p-2 text-white">
                        7- Declaración
                    </div>               
                </li>
            </ul>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Crear Formulario</button>
            </div>
            
        </form>
    </div>
@endsection