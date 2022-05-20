@extends('app')

@section('content')       
<div class="card mx-4 mb-4">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('formulario.insert') }}" method="POST">
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
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cursos y Seminarios Profesionales
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Participación Estudiantil en Actividades Académicas, de Gestión, de Investigación y de Colaboración en Eventos Académicos **
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Represantación Estudiantil
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                        <label class="form-check-label" for="flexRadioDefault4">
                            Estudiantes Mentores
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                        <label class="form-check-label" for="flexRadioDefault5">
                            Representación de la Institución de competencias deportivas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                        <label class="form-check-label" for="flexRadioDefault6">
                            Actividades solidarias y de cooperación
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                        <label class="form-check-label" for="flexRadioDefault7">
                            Experiencia Laboral
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                        <label class="form-check-label" for="flexRadioDefault8">
                            Idiomas diferenctes al Inglés y Lengua Materna
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                        <label class="form-check-label" for="flexRadioDefault9">
                            Dirección de ramas de organizaciones estudiantiles académicas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                        <label class="form-check-label" for="flexRadioDefault10">
                            Representación de la Institución en competencias académicas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault11">
                        <label class="form-check-label" for="flexRadioDefault11">
                            Coro y Grupo de Cámara
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault12">
                        <label class="form-check-label" for="flexRadioDefault12">
                            Participación en la dirección de asociaciones de estudiantes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault13">
                        <label class="form-check-label" for="flexRadioDefault13">
                            Participación en juntas receptoras del voto
                        </label>
                    </div>
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
                    <div class="mb-3" hidden>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $id }}" readonly="readonly">
                    </div>
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
                        <input type="email" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" aria-describedby="emailHelp" value="{{ $correo }}">
                        @error('correo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                        <label for="resumen_actividades" class="form-label">Breve resumen de las actividades realizadas:</label>
                        <textarea class="form-control" id="resumen_actividades" name="resumen_actividades" rows="2"></textarea>
                    </div>            
                    <div class="mb-3">
                        <label for="actividades_realizadas" class="form-label">¿De qué manera las actividades realizadas contribuyeron al perfil de egreso de su carrera?</label>
                        <textarea class="form-control" id="actividades_realizadas" name="actividades_realizadas" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="aprendizaje_perfil" class="form-label">¿A qué resultados de aprendizaje del perfil de egreso considera que aportaron las actividades realizadas?</label>
                        <textarea class="form-control" id="aprendizaje_perfil" name="aprendizaje_perfil" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="malla_curricular" class="form-label">¿Cuáles son las asignaturas de la malla curricular y las temáticas de mayor utilidad para el desarrollo de las actividades?</label>
                        <textarea class="form-control" id="malla_curricular" name="malla_curricular" rows="2"></textarea>                        
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
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Información de las fechas en las que realizó las actividades</label>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="mb-3 mr-2 flex-fill">
                            <label for="fecha_inicio" class="form-label">Fecha Inicio: </label>
                            <input type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" id="fecha_inicio" name="fecha_inicio" value="">
                            @error('fecha_inicio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 flex-fill">
                            <label for="fecha_fin" class="form-label">Fecha Fin: </label>
                            <input type="date" class="form-control @error('fecha_fin') is-invalid @enderror" id="fecha_fin" name="fecha_fin" value="">
                            @error('fecha_fin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>                    
                    <div class="mb-3">
                        <label for="horas_solicitadas" class="form-label">Horas Solicitadas: </label>
                        <input type="number" class="form-control" id="horas_solicitadas" name="horas_solicitadas" value="">
                    </div>
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