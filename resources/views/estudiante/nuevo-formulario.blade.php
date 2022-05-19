@extends('app')

@section('content')       
<div class="card mx-4 mb-4">
    <form action="{{ route('estudiantes.insert') }}" method="POST">
    @csrf 
            <div class="card-header">
                <h2>Nuevo Formulario</h2>
            </div>
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Carrera
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <input type="text" class="form-control" id="carrera" name="carrera" value="{{ $carrera }}">
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    1- Actividades para las que solicita la convalidación
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    2- Datos del estudiante
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $name }}" readonly="readonly">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">C&eacute;dula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $cedula }}" readonly="readonly">
                    </div>            
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" value="{{ $correo }}">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Tel&eacute;fono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $telefono }}">
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" value="{{ $celular }}">
                    </div>  
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    3- Documentación de soporte adjunta
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    4- Información de la institución en la que realizó las actividades
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    5- Información de las actividades realizadas
                </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="mb-3">
                        <label for="resumenActividades" class="form-label">Breve resumen de las actividades realizadas:</label>
                        <textarea class="form-control" id="resumenActividades" rows="2"></textarea>
                    </div>            
                    <div class="mb-3">
                        <label for="actividadesRealizadas" class="form-label">¿De qué manera las actividades realizadas contribuyeron al perfil de egreso de su carrera?</label>
                        <textarea class="form-control" id="actividadesRealizadas" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="aprendizajePerfil" class="form-label">¿A qué resultados de aprendizaje del perfil de egreso considera que aportaron las actividades realizadas?</label>
                        <textarea class="form-control" id="aprendizajePerfil" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="mallaCurricular" class="form-label">¿Cuáles son las asignaturas de la malla curricular y las temáticas de mayor utilidad para el desarrollo de las actividades?</label>
                        <textarea class="form-control" id="mallaCurricular" rows="2"></textarea>                        
                    </div>  
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    6- Información Adicional
                </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    7- Declaración
                </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    sss
                </div>
                </div>
            </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Crear Formulario</button>
            </div>            
    </form>
</div>
@endsection