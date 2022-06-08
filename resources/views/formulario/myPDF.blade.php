<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
<style>
    body {
    margin-right: 20px;
    margin-top: 40px;
    margin-bottom: 40px; 
    font: 'sans-serif';
}
.f-left {
    float: left; 
}

.c-left{
    clear:left
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

.font-bold{
    font-weight: bold;
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

.bg-info{
    background-color: rgb(221, 235, 247);
}

.bg-success{
    background-color: rgb(198, 224, 180);
}

.bg-warning{
    background-color: rgb(255, 230, 153);
}

.bg-danger{
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
</head>
<body>
    <div>    
        <div class="div1 f-left">Div 1</div>
        <div class="div2 f-left">
            <p class="line-height-none font-bold font-14 text-center">ESCUELA POLITÉCNICA NACIONAL</p>
            <p class="line-height-none font-bold font-12 text-center">FACULTAD DE CIENCIAS</p>
        </div>
        <div class="div3 pl-10">
            <div class="f-left magin">   
                <div class="uppercase font-bold font-14">Formulario</div>
                <div class="font-bold">Versión</div>
            </div>
            <div class="f-left">
                <div class="uppercase font-bold text-red font-14 ml-20">{{$formulario}}</div>
                <div class="text-right font-bold font-14">{{$version}}</div>
            </div>        
        </div> 
    </div>  
    <div class="c-left">
        <div class="font-bold font-14 f-left w-20porc">
            CARRERA:
        </div>
        <div class="f-left bg-info w-80porc font-bold">
            {{$carrera}}
        </div>
    </div>
    <div class="c-left mt-40">
        <div class="font-bold font-14 text-center">
            CONVALIDACIÓN DE PRÁCTICAS PREPROFESIONALES
        </div>
        <div class="font-bold font-10 mt-30">
            SECCIONES A SER LLENADAS POR CADA RESPONSABLE:
        </div>
        <div class="font-bold font-10 bg-success w-1d3">
            Estudiante (resaltadas en verde)
        </div>
        <div class="font-bold font-10 bg-warning w-1d3">
            Tutor (resaltada en amarillo)
        </div>
        <div class="font-bold font-10 bg-danger w-1d3">
            CPP (resaltada en anaranjado)
        </div>
    </div>

    <div class="mt-10 font-12 font-bold bg-success">
        1. ACTIVIDADES PARA LAS QUE SOLICITA LA CONVALIDACIÓN
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td style="width: 10%" class="text-center">{{$actividades == 'Cursos y Seminarios Profesionales' ? 'X' : ''}}</td>
            <td style="width: 35%">Cursos y Seminarios Profesionales</td>
            <td style="width: 10%" class="text-center">{{$actividades == 'Idiomas diferentes al Inglés y Lengua Materna' ? 'X' : ''}}</td>
            <td style="width: 45%">Idiomas diferentes al Inglés y Lengua Materna</td>
        </tr>
        <tr>
            <td class="text-center">{{$actividades == 'Participación Estudiantil en Actividades Académicas, de Gestión, de Investigación y de Colaboración en Eventos Académicos **' ? 'X' : ''}}</td>
            <td>
                Participación Estudiantil en Actividades Académicas, de 
                Gestión, de Investigación y de Colaboración en Eventos 
                Académicos **
            </td>
            <td class="text-center">{{$actividades == 'Dirección de ramas de organizaciones estudiantiles académicas' ? 'X' : ''}}</td>
            <td>Dirección de ramas de organizaciones estudiantiles académicas</td>
        </tr>
        <tr>
            <td class="text-center">{{$actividades == 'Representación Estudiantil' ? 'X' : ''}}</td>
            <td>Representación Estudiantil</td>
            <td>{{$actividades == 'Representación de la Institución en competencias académicas' ? 'X' : ''}}</td>
            <td>Representación de la Institución en competencias académicas</td>
        </tr>
        <tr>
            <td class="text-center">{{$actividades == 'Estudiantes mentores' ? 'X' : ''}}</td>
            <td>Estudiantes mentores</td>
            <td class="text-center">{{$actividades == 'Coro y Grupo de Cámara' ? 'X' : ''}}</td>
            <td>Coro y Grupo de Cámara</td>
        </tr>
        <tr>
            <td class="text-center">{{$actividades == 'Representación de la Institución en competencias deportivas' ? 'X' : ''}}</td>
            <td>
                Representación de la Institución en competencias 
                deportivas
            </td>
            <td class="text-center">{{$actividades == 'Participación en la dirección de asociaciones de estudiantes' ? 'X' : ''}}</td>
            <td>Participación en la dirección de asociaciones de estudiantes</td>
        </tr>
        <tr>
            <td class="text-center">{{$actividades == 'Actividades solidarias y de cooperación' ? 'X' : ''}}</td>
            <td>Actividades solidarias y de cooperación</td>
            <td class="text-center">{{$actividades == 'Participación en juntas receptoras del voto' ? 'X' : ''}}</td>
            <td>Participación en juntas receptoras del voto</td>
        </tr>
        <tr>
            <td class="text-center">{{$actividades == 'Experiencia Laboral' ? 'X' : ''}}</td>
            <td>Experiencia Laboral</td>
            <td class="text-center"></td>
            <td></td>
        </tr>    
    </table>
    <div class="mt-10 font-12 font-bold bg-success">
        2. DATOS DEL ESTUDIANTE
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td style="width: 20%">Nombres y Apellidos:</td>
            <td style="width: 80%" colspan="5">{{$nombre_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Cédula de Identidad:</td>
            <td style="width: 80%" colspan="5">{{$cedula_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Correo electrónico:</td>
            <td style="width: 40%">{{$correo_estudiante}}</td>
            <td style="width: 10%">Teléfono: </td>
            <td style="width: 10%">{{$telefono_estudiante}}</td>
            <td style="width: 10%">Celular:</td>
            <td style="width: 10%">{{$celular_estudiante}}</td>
        </tr>
    </table>
    <div class="mt-10 font-12 font-bold bg-success">
        3. DOCUMENTACIÓN DE SOPORTE ADJUNTA
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td style="width: 100%">Lista de Documentos subidos:</td>
        </tr>
    </table>
    <div class="mt-10 font-12 font-bold bg-success">
        4. INFORMACIÓN DE LA INSTITUCIÓN EN LA QUE REALIZÓ LAS ACTIVIDADES
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td style="width: 20%">Razón Social *:</td>
            <td style="width: 80%" colspan="5">{{$nombre_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">RUC *:</td>
            <td style="width: 80%" colspan="5">{{$cedula_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Dirección *:</td>
            <td style="width: 80%" colspan="5">{{$cedula_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Ciudad/País:</td>
            <td style="width: 40%">{{$correo_estudiante}}</td>
            <td style="width: 10%">Teléfono: </td>
            <td style="width: 10%">{{$telefono_estudiante}}</td>
            <td style="width: 10%">Celular:</td>
            <td style="width: 10%">{{$celular_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Correo electrónico:</td>
            <td style="width: 80%" colspan="5">{{$cedula_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Tipo de Institución:</td>
            <td style="width: 80%" colspan="5" class="bg-info">{{$cedula_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Campo Amplio:</td>
            <td style="width: 80%" colspan="5" class="bg-info">{{$cedula_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Campo Específico:</td>
            <td style="width: 80%" colspan="5" class="bg-info">{{$cedula_estudiante}}</td>
        </tr>
        <tr>
            <td style="width: 20%">Ciudad/País:</td>
            <td style="width: 20%">{{$correo_estudiante}}</td>
            <td style="width: 20%">Teléfono: </td>
            <td style="width: 20%">{{$telefono_estudiante}}</td>
            <td style="width: 20%" colspan="2">Celular:</td>
        </tr>
    </table>   
    <div class="font-10 cursiva">
        * En el caso de que la Razón Social corresponda a un organismo internacional (Coursera, Edx u otras plataformas) colocar N/A (No Aplica).
    </div>
    <div class="font-10 cursiva">
        ** En caso de que las actividades sean bajo Convenios o Proyectos, indicar el código y nombre del convenio o proyecto. 
    </div>
    <div class="mt-10 font-12 font-bold bg-success">
        5. INFORMACIÓN DE LAS ACTIVIDADES REALIZADAS
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td>Breve resumen de las actividades realizadas:</td>
        </tr>
        <tr>
            <td style="height:30px"></td>
        </tr>
        <tr>
            <td>¿De qué manera las actividades realizadas contribuyeron al perfil de egreso de su carrera?</td>
        </tr>
        <tr>
            <td style="height:30px"></td>
        </tr>
        <tr>
            <td>¿A qué resultados de aprendizaje del perfil de egreso considera que aportaron las actividades realizadas?</td>
        </tr>
        <tr>
            <td style="height:30px"></td>
        </tr>
        <tr>
            <td>¿Cuáles son las asignaturas de la malla curricular y las temáticas de mayor utilidad para el desarrollo de las actividades?</td>
        </tr>
        <tr>
            <td style="height:30px"></td>
        </tr>
    </table>
    <div class="mt-10 font-12 font-bold bg-success">
        6. INFORMACIÓN ADICIONAL
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td colspan="4">Información de las fechas en las que realizó las actividades</td>
        </tr>
        <tr>
            <td style="width: 25%">Fecha inicio:</td>
            <td style="width: 25%"></td>
            <td style="width: 25%">Fecha fin:</td>
            <td style="width: 25%"></td>
        </tr>
        <tr>
            <td colspan="4">Horas solicitadas ***:</td>
        </tr>
    </table>
    <div class="font-10 cursiva">
        *** En el caso de actividades con horarios flexibles, detallar los horarios de trabajo y adjuntar el registro de asistencia y actividades. 
    </div>
    <div class="mt-10 font-12 font-bold bg-success">
        7. DECLARACIÓN
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td style="width: 100%" colspan="4">Yo, NOMBRE_ESTUDIANTE, declaro que la información presentada para la convalidación de prácticas preprofesionales es verídica.</td>
        </tr>
        <tr style="border: none">
            <td style="width: 15%">Fecha:</td>
            <td style="width: 40%">dd/mm/aaaa</td>
            <td style="width: 20%">Firma:</td>
            <td style="width: 25%"></td>
        </tr>
    </table>
    <div class="mt-10 font-12 font-bold bg-warning">
        8. INFORME DEL TUTOR EPN
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td style="width: 15%" colspan="2">Nombre:</td>
            <td style="width: 20%"></td>
            <td style="width: 20%">Departamento:</td>
            <td style="width: 45%"></td>
        </tr>
        <tr>
            <td style="width: 60%">
                ¿Considera que las actividades reportadas contribuyeron a la aplicación de 
                conocimientos o al desarrollo de competencias en la formación del estudiante?
            </td>
            <td style="width: 10%">SI:</td>
            <td style="width: 10%"></td>
            <td style="width: 10%">NO:</td>
            <td style="width: 10%"></td>
        </tr>
        <tr>
            <td style="width: 60%">
                ¿Considera que las actividades reportadas contribuyeron a la consecución de 
                los resultados del aprendizaje del perfil de egreso? 
            </td>
            <td style="width: 10%">SI:</td>
            <td style="width: 10%"></td>
            <td style="width: 10%">NO:</td>
            <td style="width: 10%"></td>
        </tr>
        <tr>
            <td style="width: 60%">
                ¿Validó las actividades reportadas por el estudiante? 
            </td>
            <td style="width: 10%">SI:</td>
            <td style="width: 10%"></td>
            <td style="width: 10%">NO:</td>
            <td style="width: 10%"></td>
        </tr>
        <tr>
            <td colspan="5">
                Análisis y Recomendaciones respecto de la información presentada: 
            </td>
        </tr>
        <tr>
            <td style="height:30px" colspan="5"> 
            </td>
        </tr>
        <tr>
            <td style="height:20px">
                Horas validadas y sugeridas 
                de convalidación: 
            </td>
            <td colspan="4">

            </td>
        </tr>
    </table>
    <div class="mt-10 font-12 font-bold bg-danger">
        9. COMISIÓN DE PRÁCTICAS PREPROFESIONALES
    </div>
    <table style="width:100%" class="font-10 font-bold">
        <tr>
            <td style="width: 25%">Horas convalidadas:</td>
            <td style="width: 25%" colspan="3"></td>
        </tr>
        <tr>
            <td style="width: 25%">Prácticas Laborales:</td>
            <td style="width: 25%"></td>
            <td style="width: 25%">Servicio Comunitario:</td>
            <td style="width: 25%"></td>
        </tr>
        <tr>
            <td style="width: 25%">Observaciones de la CPP:</td>
            <td style="width: 25%" colspan="3"></td>
        </tr>
    </table>
</body>
</html>