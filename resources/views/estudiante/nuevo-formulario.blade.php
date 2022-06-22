@extends('app')

<style>
body {
    margin-right: 20px;
    margin-top: 30px;
    margin-bottom: 40px; 
    font: 'sans-serif';
}

.div1 {        
    width: 25%;
    margin-top: 10px;
}

.div2 {        
    width: 45%;
    text-align: center;
    margin-top: 10px;
}

.div3 {        
    width: 25%;
    margin-left: 30px;
}

.text-center{
    text-align: center;
}

.text-left{
    text-align: left;
}

.text-right{
    text-align: right;
}

.uppercase{
    text-transform: uppercase;
}

.cursiva{
    font-style: italic;
}

.mt-50{
    margin-top: 50px;
}

.mt-40{
    margin-top: 40px;
}

.mt-30{
    margin-top: 30px;
}

.mt-10{
    margin-top: 10px;
}

.ml-20{
    margin-left: 20px;
}

.pl-10{
    padding-left: 10px;
}

.text-red{
    color: red;
}

.font-14{
    font-size: 14px;
}

.font-12{
    font-size: 12px;
}

.font-10{
    font-size: 10px;
}

.font-bold{
    font-weight: bold;
}

.bg-info2{
    background-color: rgb(221, 235, 247);
}

.bg-success2{
    background-color: rgb(198, 224, 180);
}

.bg-warning2{
    background-color: rgb(255, 230, 153);
}

.bg-danger2{
    background-color: rgb(248, 203, 173);
}

.w-full{
    width: 100%;
}

.w-80porc{
    width: 80%;
}

.w-20porc{
    width: 20%;
}

.w-1d3{
    width: 33%;
}

table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}

.line-height-none{
    line-height: 0;
}

</style>

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
    <form action="{{ route('formulario.insert') }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @if(isset($formulario))
    <div hidden>
        <!-- Esta linea sirve para comprobar en el controlador si estamos 
        en la pantalla de insertar o crear el formulario -->
        <input type="text" name="verificado" id="verificado" value="No"/>
    @else
    <div>
        <input type="text" name="verificado" id="verificado" value="Si" hidden/>
    @endif
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
                    <input type="text" class="form-control" id="carrera" name="carrera" value="{{ $carrera }}" readonly="readonly"/>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    1- Actividades para las que solicita la convalidación
                </button>
                </h2>
                @if(isset($formulario))
                    <input class="form-control" type="text" name="actividad" value="{{$formulario->actividades}}">
                @endif
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
          
                    <div class="form-check">
                        <!-- <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Cursos y Seminarios Profesionales"> -->
                        <input class="form-check-input" type="radio" name="actividad" value="Cursos y Seminarios Profesionales">
                        <label class="form-check-label">
                            Cursos y Seminarios Profesionales
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Participación Estudiantil en Actividades Académicas, de Gestión, de Investigación y de Colaboración en Eventos Académicos **">
                        <label class="form-check-label">
                            Participación Estudiantil en Actividades Académicas, de Gestión, de Investigación y de Colaboración en Eventos Académicos **
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Represantación Estudiantil">
                        <label class="form-check-label">
                            Represantación Estudiantil
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Estudiantes Mentores">
                        <label class="form-check-label">
                            Estudiantes Mentores
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Representación de la Institución de competencias deportivas">
                        <label class="form-check-label">
                            Representación de la Institución de competencias deportivas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Representación de la Institución de competencias deportivas">
                        <label class="form-check-label">
                            Representación de la Institución de competencias deportivas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Actividades solidarias y de cooperación">
                        <label class="form-check-label">
                            Actividades solidarias y de cooperación
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Experiencia Laboral">
                        <label class="form-check-label">
                            Experiencia Laboral
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Idiomas diferenctes al Inglés y Lengua Materna">
                        <label class="form-check-label">
                            Idiomas diferenctes al Inglés y Lengua Materna
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Dirección de ramas de organizaciones estudiantiles académicas">
                        <label class="form-check-label">
                            Dirección de ramas de organizaciones estudiantiles académicas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Representación de la Institución en competencias académicas">
                        <label class="form-check-label">
                            Representación de la Institución en competencias académicas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Coro y Grupo de Cámara">
                        <label class="form-check-label">
                            Coro y Grupo de Cámara
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Participación en la dirección de asociaciones de estudiantes">
                        <label class="form-check-label">
                            Participación en la dirección de asociaciones de estudiantes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="actividad" value="Participación en juntas receptoras del voto">
                        <label class="form-check-label">
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
                    <div class="mb-3" hidden>
                        <input type="text" class="form-control" id="epn" name="epn" value="{{ $epn }}" readonly="readonly">
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
                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ $telefono }}">
                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control @error('celular') is-invalid @enderror" id="celular" name="celular" value="{{ $celular }}">
                        @error('celular')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                    <!-- <input type="file" name="archivo" required> -->
                    <input type="file" class="form-control" name="documentacion_soporte[]" id="documentacion_soporte" accept="application/pdf" multiple="multiple">
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
                    

                    <div class="form-check d-flex flex-wrap justify-content-around mt-4 mb-4 px-auto">
                        <div class="form-check mr-2">
                            <input class="form-check-input" type="radio" name="tipo_institucion" id="tipo_institucion" onclick="mostrarEstudiante()" value="Institución Nacional" checked>
                            <label class="form-check-label mr-2">
                                Institución Nacional
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_institucion" onclick="mostrarEstudiante()" value="Institución Internacional"/>
                            <label class="form-check-label">
                                Institución Internacional
                            </label>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="ruc_institucion" class="form-label">RUC *:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="ruc_institucion" name="ruc_institucion" value="{{isset($formulario) ? $formulario->ruc_institucion : ''}}" >
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2" onclick="buscarPorRUC()" style="cursor: pointer">@@</span>
                            </div>
                        </div>    
                    </div>
                    <div class="mb-3">
                        <label for="razon_social_institucion" class="form-label">Razón Social *:</label>
                        <input type="text" class="form-control" id="razon_social_institucion" name="razon_social_institucion" value="{{isset($formulario) ? $formulario->razon_social_institucion : ''}}" >
                    </div>                   
                    <div class="mb-3">
                        <label for="direccion_institucion" class="form-label">Dirección *:</label>
                        <input type="text" class="form-control" id="direccion_institucion" name="direccion_institucion" value="{{isset($formulario) ? $formulario->direccion_institucion : ''}}" >
                    </div>
                    <div class="mb-3">
                        <label for="telefono_institucion" class="form-label">Teléfono *:</label>
                        <input type="text" class="form-control" id="telefono_institucion" name="telefono_institucion" value="{{isset($formulario) ? $formulario->telefono_institucion : ''}}" >
                    </div>
                    <div class="mb-3">
                        <label for="celular_institucion" class="form-label">Celular *:</label>
                        <input type="text" class="form-control" id="celular_institucion" name="celular_institucion" value="{{isset($formulario) ? $formulario->celular_institucion : ''}}" >
                    </div>
                    <div class="mb-3">
                        <label for="ciudad_pais_institucion" class="form-label">Ciudad/Pais *:</label>
                        <input type="text" class="form-control" id="ciudad_pais_institucion" name="ciudad_pais_institucion" value="{{isset($formulario) ? $formulario->ciudad_pais_institucion : ''}}" >
                    </div>
                    <div class="mb-3">
                        <label for="correo_institucion" class="form-label">Correo *:</label>
                        <input type="text" class="form-control" id="correo_institucion" name="correo_institucion" value="{{isset($formulario) ? $formulario->correo_institucion : ''}}" >
                    </div>
                    @if(isset($formulario))
                    <div class="mb-3">
                        <label for="" class="form-label">Tipo_Institucion 2 *:</label>
                        <input type="text" class="form-control" id="tipo_institucion2" name="tipo_institucion2" value="{{$formulario->tipo_institucion2}}" >
                    </div>
                    @endif
                    @if(!isset($formulario))
                    <div class="mb-3">
                        <label for="tipo_institucion" class="form-label">Tipo de institución:</label>
                        <select class="form-select" aria-label="Default select example" id="tipo_institucion2" name="tipo_institucion2" >
                            <option selected>Seleccione</option>
                            <option value="PÚBLICA">PÚBLICA</option>
                            <option value="PRIVADA">PRIVADA</option>
                            <option value="ORGANISMO INTERNACIONAL">ORGANISMO INTERNACIONAL</option>
                            <option value="TERCER SECTOR">TERCER SECTOR</option>
                            <option value="OTRAS">OTRAS</option>
                        </select>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="campo_amplio_institucion" class="form-label">Campo Amplio:</label>
                        <input type="text" class="form-control" id="campo_amplio_institucion" name="campo_amplio_institucion" value="{{ ($carrera == 'Informatica' || $carrera == 'TI' ? 'Tecnologías de la Información y la Comunicación' : 'Ingeniería Industria y Construcción') }}" readonly="readonly"/>
                    </div>
                    <div class="mb-3">
                        <label for="campo_especifico_institucion" class="form-label">Campo Específico:</label>
                        <input type="text" class="form-control" id="campo_especifico_institucion" name="campo_especifico_institucion" value="{{ ($carrera == 'Informatica' || $carrera == 'TI' ? 'Tecnologías de la Información y la Comunicación' : 'Ingeniería y profesiones afines') }}" readonly="readonly"/>
                    </div>
                    <div class="mb-3">
                        <label for="codigo_proyecto_institucion" class="form-label">Código Proyecto/Convenio **:</label>
                        <input type="text" class="form-control" id="codigo_proyecto_institucion" name="codigo_proyecto_institucion" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="nombre_proyecto_institucion" class="form-label">Nombre del Proyecto/Convenio:</label>
                        <input type="text" class="form-control" id="nombre_proyecto_institucion" name="nombre_proyecto_institucion" value="" >
                    </div>
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
                    <div class="d-flex gap-2 justify-content-around">
                        <div class="mb-3 flex-fill">
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
                    <input type="file" class="form-control" name="informacion_adicional" id="informacion_adicional" accept="application/pdf">
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
                    <div class="mb-3">
                        <p class="form-label">Yo, {{$name}}, declaro que la información presentada para la convalidación de prácticas preprofesionales es verídica</p>
                        <label for="fecha_declaracion" class="form-label">Fecha: </label>
                        <input type="date" class="form-control" name="fecha_declaracion" id="fecha_declaracion" value="<?php echo date("Y-m-d");?>" readonly="readonly"/>
                    </div>
                    <div class="mb-3">
                        <label for="firma_declaracion" class="form-label">Firma: </label>
                        <input type="file" class="form-control" name="firma_declaracion" id="firma_declaracion" accept="image/*">
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div>
            
    @if(isset($formulario))
    <div class="m-5">
        <div class="d-flex">
            <div class="font-bold mr-5">
                CARRERA:
            </div>
            <div class="bg-info2 font-bold w-full">
                {{$carrera}}
            </div>
        </div>
        <!-- ACTIVIDADES PARA LAS QUE SOLICITA LA CONVALIDACIÓN -->
        <div class="mt-10 font-bold bg-success2">
            1. ACTIVIDADES PARA LAS QUE SOLICITA LA CONVALIDACIÓN
        </div>
        <table style="width:100%" class="table table-bordered">
            <tr>
                <td style="width: 10%" class="text-center">{{$formulario->actividades == 'Cursos y Seminarios Profesionales' ? 'X' : ''}}</td>
                <td style="width: 35%">Cursos y Seminarios Profesionales</td>
                <td style="width: 10%" class="text-center">{{$formulario->actividades == 'Idiomas diferentes al Inglés y Lengua Materna' ? 'X' : ''}}</td>
                <td style="width: 45%">Idiomas diferentes al Inglés y Lengua Materna</td>
            </tr>
            <tr>
                <td class="text-center">{{$formulario->actividades == 'Participación Estudiantil en Actividades Académicas, de Gestión, de Investigación y de Colaboración en Eventos Académicos **' ? 'X' : ''}}</td>
                <td>
                    Participación Estudiantil en Actividades Académicas, de 
                    Gestión, de Investigación y de Colaboración en Eventos 
                    Académicos **
                </td>
                <td class="text-center">{{$formulario->actividades == 'Dirección de ramas de organizaciones estudiantiles académicas' ? 'X' : ''}}</td>
                <td>Dirección de ramas de organizaciones estudiantiles académicas</td>
            </tr>
            <tr>
                <td class="text-center">{{$formulario->actividades == 'Representación Estudiantil' ? 'X' : ''}}</td>
                <td>Representación Estudiantil</td>
                <td>{{$formulario->actividades == 'Representación de la Institución en competencias académicas' ? 'X' : ''}}</td>
                <td>Representación de la Institución en competencias académicas</td>
            </tr>
            <tr>
                <td class="text-center">{{$formulario->actividades == 'Estudiantes mentores' ? 'X' : ''}}</td>
                <td>Estudiantes mentores</td>
                <td class="text-center">{{$formulario->actividades == 'Coro y Grupo de Cámara' ? 'X' : ''}}</td>
                <td>Coro y Grupo de Cámara</td>
            </tr>
            <tr>
                <td class="text-center">{{$formulario->actividades == 'Representación de la Institución en competencias deportivas' ? 'X' : ''}}</td>
                <td>
                    Representación de la Institución en competencias 
                    deportivas
                </td>
                <td class="text-center">{{$formulario->actividades == 'Participación en la dirección de asociaciones de estudiantes' ? 'X' : ''}}</td>
                <td>Participación en la dirección de asociaciones de estudiantes</td>
            </tr>
            <tr>
                <td class="text-center">{{$formulario->actividades == 'Actividades solidarias y de cooperación' ? 'X' : ''}}</td>
                <td>Actividades solidarias y de cooperación</td>
                <td class="text-center">{{$formulario->actividades == 'Participación en juntas receptoras del voto' ? 'X' : ''}}</td>
                <td>Participación en juntas receptoras del voto</td>
            </tr>
            <tr>
                <td class="text-center">{{$formulario->actividades == 'Experiencia Laboral' ? 'X' : ''}}</td>
                <td>Experiencia Laboral</td>
                <td class="text-center"></td>
                <td></td>
            </tr>    
        </table>
        <!--FIN ACTIVIDADES PARA LAS QUE SOLICITA LA CONVALIDACIÓN -->
        <div class="mt-10 font-bold bg-success2">
            2. DATOS DEL ESTUDIANTE
        </div>
        <table style="width:100%" class="table table-bordered">
        <tr>
            <td style="width: 20%">Nombres y Apellidos:</td>
            <td style="width: 80%" colspan="5">{{$name}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Cédula de Identidad:</td>
            <td style="width: 80%" colspan="5">{{$cedula}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Correo electrónico:</td>
            <td style="width: 40%">{{$correo}}</td>
            <td style="width: 10%">Teléfono: </td>
            <td style="width: 10%">{{$telefono}}</td>
            <td style="width: 10%">Celular:</td>
            <td style="width: 10%">{{$celular}}</td>
        </tr>
    </table>
    <div class="mt-10 font-bold bg-success2">
        3. DOCUMENTACIÓN DE SOPORTE ADJUNTA
    </div>
    <table style="width:100%" class="table table-bordered">
        <tr>
            <td style="width: 100%">Lista de Documentos subidos:</td>
        </tr>
    </table>
    <div class="mt-10 font-bold bg-success2">
        4. INFORMACIÓN DE LA INSTITUCIÓN EN LA QUE REALIZÓ LAS ACTIVIDADES
    </div>
    <table style="width:100%" class="table table-bordered">
        <tr>
            <td style="width: 20%">Razón Social *:</td>
            <td style="width: 80%" colspan="5">{{$formulario->razon_social_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">RUC *:</td>
            <td style="width: 80%" colspan="5">{{$formulario->ruc_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Dirección *:</td>
            <td style="width: 80%" colspan="5">{{$formulario->direccion_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Ciudad/País:</td>
            <td style="width: 40%">{{$formulario->ciudad_pais_institucion}}</td>
            <td style="width: 10%">Teléfono: </td>
            <td style="width: 10%">{{$formulario->telefono_institucion}}</td>
            <td style="width: 10%">Celular:</td>
            <td style="width: 10%">{{$formulario->celular_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Correo electrónico:</td>
            <td style="width: 80%" colspan="5">{{$formulario->correo_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Tipo de Institución:</td>
            <td style="width: 80%" colspan="5" class="bg-info">{{$formulario->tipo_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Campo Amplio:</td>
            <td style="width: 80%" colspan="5" class="bg-info">{{$formulario->campo_amplio_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Campo Específico:</td>
            <td style="width: 80%" colspan="5" class="bg-info">{{$formulario->campo_especifico_institucion}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Código de Proyecto/Convenio:</td>
            <td style="width: 20%">{{$formulario->codigo_proyecto_convenio}}</td>
            <td style="width: 20%">Nombre del Proyecto/Convenio: </td>
            <td style="width: 20%" colspan="1">{{$formulario->nombre_proyecto_convenio}}</td>
        </tr>
    </table>  
    <div class="mt-10 font-bold bg-success2">
        5. INFORMACIÓN DE LAS ACTIVIDADES REALIZADAS
    </div>
    <table style="width:100%" class="table table-bordered">
        <tr>
            <td>Breve resumen de las actividades realizadas:</td>
        </tr>
        <tr>
            <td style="height:30px">{{$formulario->resumen_actividades}}</td>
        </tr>
        <tr>
            <td>¿De qué manera las actividades realizadas contribuyeron al perfil de egreso de su carrera?</td>
        </tr>
        <tr>
            <td style="height:30px">{{$formulario->actividades_realizadas}}</td>
        </tr>
        <tr>
            <td>¿A qué resultados de aprendizaje del perfil de egreso considera que aportaron las actividades realizadas?</td>
        </tr>
        <tr>
            <td style="height:30px">{{$formulario->aprendizaje_perfil}}</td>
        </tr>
        <tr>
            <td>¿Cuáles son las asignaturas de la malla curricular y las temáticas de mayor utilidad para el desarrollo de las actividades?</td>
        </tr>
        <tr>
            <td style="height:30px">{{$formulario->malla_curricular}}</td>
        </tr>
    </table>
    <div class="mt-10 font-bold bg-success2">
        6. INFORMACIÓN ADICIONAL
    </div>
    <table style="width:100%" class="table table-bordered">
        <tr>
            <td colspan="4">Información de las fechas en las que realizó las actividades</td>
        </tr>
        <tr>
            <td style="width: 25%">Fecha inicio:</td>
            <td style="width: 25%">{{$formulario->fecha_inicio_actividades}}</td>
            <td style="width: 25%">Fecha fin:</td>
            <td style="width: 25%">{{$formulario->fecha_fin_actividades}}</td>
        </tr>
        <tr>
            <td colspan="4">Horas solicitadas ***: {{$formulario->horas_solicitadas}}</td>
        </tr>
    </table>
    <div class="mt-10 font-bold bg-success2">
        7. DECLARACIÓN
    </div>
    <table style="width:100%" class="table table-bordered">
        <tr>
            <td style="width: 100%" colspan="4">Yo, {{$name}}, declaro que la información presentada para la convalidación de prácticas preprofesionales es verídica.</td>
        </tr>
        <tr style="border: none">
            <td style="width: 15%">Fecha:</td>
            <td style="width: 40%">{{$formulario->fecha_declaracion}}</td>
            <td style="width: 20%">Firma:</td>
            <td style="width: 25%"></td>
        </tr>
    </table>
    </div>
    @endif
    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-primary">Crear Formulario</button>
    </div>
</div>
</form>
</div>
<script>
    function mostrarEstudiante(){
        var institucion_nacional = document.getElementById('tipo_institucion').checked;

        var ruc_institucion = document.getElementById('ruc_institucion');
        var razon_social_institucion = document.getElementById('razon_social_institucion');
        var direccion_institucion = document.getElementById('direccion_institucion');
        var telefono_institucion = document.getElementById('telefono_institucion');
        var celular_institucion = document.getElementById('celular_institucion');
        var busquedaProfesor = document.getElementById('ruc_institucion');

        razon_social_institucion.value = "";
        ruc_institucion.value = "";
        direccion_institucion.value = "";
        telefono_institucion.value = "";
        celular_institucion.value = "";

        if(!institucion_nacional){// Este if sirve para saber si esta marcado el check que significa que es un Profesor 
            razon_social_institucion.value = "N/A";
            ruc_institucion.value = "N/A";
            direccion_institucion.value = "N/A";
            telefono_institucion.value = "N/A";
            celular_institucion.value = "N/A";
        }
    }   
    function buscarPorRUC(){
        alert("Buscar por RUC");
    } 
</script>
@endsection