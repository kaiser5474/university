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
    <form action="{{ route('formulario.insert') }}" method="POST" enctype="multipart/form-data">
    @csrf 
            <div class="card-header">
                <h2>Aceptar Formulario</h2>
            </div>
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                    Carrera
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <input type="text" class="form-control" id="carrera" name="carrera" value="{{ $estudiante->carrera }}">
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
                        <label class="form-check-label" for="flexRadioDefault1">
                            {{$formulario->actividades}}
                        </label>
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
                        <input type="text" class="form-control" id="id" name="id" value="{{ $estudiante->id }}" readonly="readonly">
                    </div>
                    <div class="mb-3" hidden>
                        <input type="text" class="form-control" id="epn" name="epn" value="{{ $estudiante->epn }}" readonly="readonly">
                    </div>
                    <div class="mb-3">
                        <label for="nombres" class="form-label">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $estudiante->name }}" readonly="readonly">
                    </div>
                    <div class="mb-3">
                        <label for="cedula" class="form-label">C&eacute;dula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $estudiante->cedula }}" readonly="readonly">
                    </div>            
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" aria-describedby="emailHelp" value="{{ $estudiante->correo }}" readonly="readonly">
                        @error('correo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Tel&eacute;fono</label>
                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{ $estudiante->telefono }}" readonly="readonly">
                        @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="text" class="form-control @error('celular') is-invalid @enderror" id="celular" name="celular" value="{{ $estudiante->celular }}" readonly="readonly">
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
                    <div class="form-check mt-4 mb-4">
                        <div class="">
                            <label class="form-check-label" for="institucion_nacional">
                                Tipo Institución: <span>{{$formulario->tipo_institucion2}}</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="ruc_institucion" class="form-label">RUC *:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="ruc_institucion" name="ruc_institucion" value="" >
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2" onclick="buscarPorRUC()" style="cursor: pointer">@@</span>
                            </div>
                        </div>    
                    </div>
                    <div class="mb-3">
                        <label for="razon_social_institucion" class="form-label">Razón Social *:</label>
                        <input type="text" class="form-control" id="razon_social_institucion" name="razon_social_institucion" value="" >
                    </div>                   
                    <div class="mb-3">
                        <label for="direccion_institucion" class="form-label">Dirección *:</label>
                        <input type="text" class="form-control" id="direccion_institucion" name="direccion_institucion" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="telefono_institucion" class="form-label">Teléfono *:</label>
                        <input type="text" class="form-control" id="telefono_institucion" name="telefono_institucion" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="celular_institucion" class="form-label">Celular *:</label>
                        <input type="text" class="form-control" id="celular_institucion" name="celular_institucion" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="ciudad_pais_institucion" class="form-label">Ciudad/Pais *:</label>
                        <input type="text" class="form-control" id="ciudad_pais_institucion" name="ciudad_pais_institucion" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="correo_institucion" class="form-label">Corre *:</label>
                        <input type="text" class="form-control" id="correo_institucion" name="correo_institucion" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="tipo_institucion" class="form-label">Tipo de institución:</label>
                        <select class="form-select" aria-label="Default select example" id="tipo_institucion2" name="tipo_institucion2">
                            <option selected>Seleccione</option>
                            <option value="PÚBLICA">PÚBLICA</option>
                            <option value="PRIVADA">PRIVADA</option>
                            <option value="ORGANISMO INTERNACIONAL">ORGANISMO INTERNACIONAL</option>
                            <option value="TERCER SECTOR">TERCER SECTOR</option>
                            <option value="OTRAS">OTRAS</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="campo_amplio_institucion" class="form-label">Campo Amplio:</label>
                        <input type="text" class="form-control" id="campo_amplio_institucion" name="campo_amplio_institucion" value="" >
                    </div>
                    <div class="mb-3">
                        <label for="campo_especifico_institucion" class="form-label">Campo Específico:</label>
                        <input type="text" class="form-control" id="campo_especifico_institucion" name="campo_especifico_institucion" value="" >
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
                        <textarea class="form-control" id="resumen_actividades" name="resumen_actividades" rows="2" readonly="readonly">{{$formulario->resumen_actividades}}</textarea>
                    </div>            
                    <div class="mb-3">
                        <label for="actividades_realizadas" class="form-label">¿De qué manera las actividades realizadas contribuyeron al perfil de egreso de su carrera?</label>
                        <textarea class="form-control" id="actividades_realizadas" name="actividades_realizadas" rows="2" readonly="readonly">{{$formulario->actividades_realizadas}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="aprendizaje_perfil" class="form-label">¿A qué resultados de aprendizaje del perfil de egreso considera que aportaron las actividades realizadas?</label>
                        <textarea class="form-control" id="aprendizaje_perfil" name="aprendizaje_perfil" rows="2" readonly="readonly">{{$formulario->aprendizaje_perfil}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="malla_curricular" class="form-label">¿Cuáles son las asignaturas de la malla curricular y las temáticas de mayor utilidad para el desarrollo de las actividades?</label>
                        <textarea class="form-control" id="malla_curricular" name="malla_curricular" rows="2" readonly="readonly">{{$formulario->malla_curricular}}</textarea>                        
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
                        <p class="form-label">Yo, {{$estudiante->name}}, declaro que la información presentada para la convalidación de prácticas preprofesionales es verídica</p>
                        <label for="fecha_declaracion" class="form-label">Fecha: </label>
                        <input type="date" class="form-control" name="fecha_declaracion" id="fecha_declaracion" value="{{$formulario->fecha_declaracion}">
                    </div>
                    <div class="mb-3">
                        <label for="firma_declaracion" class="form-label">Firma: </label>
                        <input type="file" class="form-control" name="firma_declaracion" id="firma_declaracion" accept="image/*">
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    8- Informe del tutor EPN
                </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="mb-3">
                        <label for="nombre_tutor" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre_tutor" id="nombre_tutor" value="">
                    </div>
                    <div class="mb-3">
                        <label for="departamento_tutor" class="form-label">Departamento: </label>
                        <input type="text" class="form-control" name="departamento_tutor" id="departamento_tutor" value="">
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Aceptar Formulario</button>
            </div>            
    </form>
</div>
<script>
    function mostrarEstudiante(){
        var institucion_nacional = document.getElementById('institucion_nacional').checked;

        var ruc_institucion = document.getElementById('ruc_institucion');
        var razon_social_institucion = document.getElementById('razon_social_institucion');
        var direccion_institucion = document.getElementById('direccion_institucion');
        var telefono_institucion = document.getElementById('telefono_institucion');
        var celular_institucion = document.getElementById('celular_institucion');
        var busquedaProfesor = document.getElementById('ruc_institucion');

        if(institucion_nacional){// Este if sirve para saber si esta marcado el check que significa que es un Estudiante            
            //busquedaEstudiante.removeAttribute("hidden");
            //busquedaProfesor.setAttribute("hidden", "true");            
        }
        if(!institucion_nacional){// Este if sirve para saber si esta marcado el check que significa que es un Profesor 
            razon_social_institucion.value = "N/A";
            ruc_institucion.value = "N/A";
            direccion_institucion.value = "N/A";
            telefono_institucion.value = "N/A";
            celular_institucion.value = "N/A";
            //busquedaEstudiante.setAttribute("hidden", "true");
        }
    }   
    function buscarPorRUC(){
        alert("Buscar por RUC");
    } 
</script>
@endsection