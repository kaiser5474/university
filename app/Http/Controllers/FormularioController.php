<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Estudiante;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole('admin'))
        {
            $profesores = Profesor::all();
            //dd($profesores);
            $formularios = Formulario::select('formularios.*', 'estudiantes.nombres', 'estudiantes.apellidos')
            ->join('estudiantes', 'formularios.estudiante_id', '=', 'estudiantes.id')
            ->get(); // or first() 
            return view('formulario.index', ['formularios' => $formularios]);
        }else
        if(auth()->user()->hasRole('estudiante'))
        {
            $user_id = auth()->user()->id;
            $formularios = Formulario::select('formularios.*')
            ->join('estudiantes', 'formularios.estudiante_id', '=', 'estudiantes.id')
            ->where('user_id', '=', $user_id)
            ->get(); // or first() 
            return view('formulario.index', ['formularios' => $formularios]);
        }else
        if(auth()->user()->hasRole('tutor'))
        {
            $user_id = auth()->user()->id;
            $formularios = Formulario::select('formularios.*', 'estudiantes.nombres', 'estudiantes.apellidos')
            ->join('profesors', 'formularios.profesors_id', '=', 'profesors.id')
            ->join('estudiantes', 'formularios.estudiante_id', '=', 'estudiantes.id')
            ->where('profesors.user_id', '=', $user_id)
            ->get(); // or first() 
            return view('formulario.index', ['formularios' => $formularios]);
        }else
        if(auth()->user()->hasRole('comision')){
            $user_id = auth()->user()->id;
            $formularios = Formulario::select('formularios.*', 'estudiantes.nombres', 'estudiantes.apellidos')
            ->join('estudiantes', 'formularios.estudiante_id', '=', 'estudiantes.id')
            ->get(); // or first() 
            return view('formulario.index', ['formularios' => $formularios]);    
        }
        else{
            return view('app');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'cedula' => 'required|min:10|max:10',
            'correo' => 'required|min:6',
            'telefono' => 'required',
            'celular' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'horas_solicitadas' => 'numeric|min:1'
        ];
    
        $customMessages = [
            'required' => 'El campo :attribute es obligatorio.',
            'cedula.min' => 'El campo debe tener mínimo :min caracteres.',
            'horas_solicitadas.min' => 'Las horas deben ser mayor a :min hora.',
            'horas_solicitadas.numeric' => 'El campo solo acepta numeros.',
            'after' => 'La fecha de fin de actividades debe ser posterior a la fecha de inicio.'
        ];
    
        $this->validate($request, $rules, $customMessages);

        $id = (int)$request->id;
        $estudiante = Estudiante::where('user_id', $id)->first();       
        $estudiante->update([
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'celular' => $request->celular,
        ]);

        $formulario = new Formulario; 
        $formulario->estudiante_id = (int) $estudiante->id; 
        $formulario->estado = "proceso"; 
        $formulario->resumen_actividades = $request->resumen_actividades; 
        $formulario->actividades_realizadas = $request->actividades_realizadas; 
        $formulario->aprendizaje_perfil = $request->aprendizaje_perfil; 
        $formulario->malla_curricular = $request->malla_curricular; 
        $formulario->fecha_inicio_actividades = $request->fecha_inicio; 
        $formulario->fecha_fin_actividades = $request->fecha_fin;
        $formulario->horas_solicitadas = (int) $request->horas_solicitadas; 
        $formulario->fecha_declaracion = $request->fecha_declaracion; 
        $formulario->tipo_institucion = $request->tipo_institucion;
        $formulario->razon_social_institucion = $request->razon_social_institucion;
        $formulario->ruc_institucion = $request->ruc_institucion;
        $formulario->direccion_institucion = $request->direccion_institucion;
        $formulario->telefono_institucion = $request->telefono_institucion;
        $formulario->celular_institucion = $request->celular_institucion;
        $formulario->ciudad_pais_institucion = $request->ciudad_pais_institucion;
        $formulario->correo_institucion = $request->correo_institucion; 
        $formulario->tipo_institucion2 = $request->tipo_institucion2; 
        $formulario->campo_amplio_institucion = $request->campo_amplio_institucion;
        $formulario->campo_especifico_institucion = $request->campo_especifico_institucion; 
        $formulario->codigo_proyecto_convenio = $request->codigo_proyecto_institucion;
        $formulario->nombre_proyecto_convenio = $request->nombre_proyecto_institucion;

        $firma_doc = $request->file('firma_declaracion');     
        $formulario->firma_declaracion = $firma_doc->getClientOriginalName(); 
        $formulario->actividades = $request->actividad;
       
        //Crear Directorio de Documentacion de soporte adjunta
        $makeDirectory = Storage::makeDirectory($request->epn.'/'.$formulario->id);

        if($makeDirectory){
            if($request->hasfile('documentacion_soporte')){
                $misdoc = $request->file('documentacion_soporte'); 
                $path = Storage::path($request->epn.'/'.$formulario->id);
                foreach($misdoc as $file){
                    $filename=$file->getClientOriginalName();
                    $file->move($path, $filename);                    
                  }
            }else{
                echo "No se pudieron subir los documentos al servidor, por favor intente nuevamente.";
            } 
        }else{
            echo "No se pudo crear la carpeta para subir los documentos al servidor, por favor intente nuevamente.";
        }    

        //Crear Directorio de Informacion Adicional
        $makeDirectoryAdicional = Storage::makeDirectory($request->epn.'/'.$formulario->id.'/informacion_adicional');

        if($makeDirectoryAdicional){
            if($request->hasfile('informacion_adicional')){                
                $misdocAdicional = $request->file('informacion_adicional');                 
                $path = Storage::path($request->epn.'/'.$formulario->id.'/informacion_adicional');
                $filename=$misdocAdicional->getClientOriginalName();
                $misdocAdicional->move($path, $filename);  
            }
            else
            {
                echo "No se pudieron subir los documentos al servidor, por favor intente nuevamente.";
            } 
        }
        else
        {
            echo "No se pudo crear la carpeta para subir los documentos al servidor, por favor intente nuevamente.";
        }   
        
        //Aqui compruebo en que pantalla estoy
        if($request->verificado === "Si"){
            $formulario->save();
            $user_id = auth()->user()->id;
            $formularios = Formulario::select('formularios.*')
            ->join('estudiantes', 'formularios.estudiante_id', '=', 'estudiantes.id')
            ->where('user_id', '=', $user_id)
            ->get(); // or first() 
            return view('formulario.index', ['formularios' => $formularios]);
        }else{
            //dd('Aca');
            $profesores = Profesor::all();
            return view('estudiante.nuevo-formulario', [
                'formulario' => $formulario,
                'estudiante' => $estudiante,
                'carrera' => $estudiante->carrera,
                'id' => $estudiante->id,
                'epn' => $estudiante->epn,
                'name' => $estudiante->nombres,
                'cedula' => $estudiante->cedula,
                'correo' => $estudiante->correo,
                'telefono' => $estudiante->telefono,
                'celular' => $estudiante->celular,
            ]);
        }
    }

    public function storeTutor(Request $request){
        $formulario_id = (int)$request->formulario_id;
        $profesor = Profesor::where('user_id', (int)$request->nombre_tutor_id)->first();
        $formulario = Formulario::where('id', $formulario_id)->first(); 
        $formulario->profesors_id = (int)$profesor->id;
        $formulario->save();    
        
        //return route('/formulario');
    }

    public function storeComision(Request $request){
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $formulario = Formulario::find($id); 
        $formulario->estado = 'rechazado';
        $formulario->save();
        return redirect()->route('formulario');
    }

    public function aceptarFormulario($id)
    {
        //
        $formulario = Formulario::find($id); 
        $estudiante_id = $formulario->estudiante_id;

        $estudiante = Estudiante::find($estudiante_id);
        $estudiante->name = $estudiante->nombres.' '.$estudiante->apellidos;

        $profesores = Profesor::all();

        return view('formulario.aceptar-formulario', [
            'formulario' => $formulario,
            'estudiante' => $estudiante,
            'profesores' => $profesores,
        ]);
    }

    public function aceptarFormularioTutor($id)
    {
        //
        $formulario = Formulario::find($id); 
        $estudiante_id = $formulario->estudiante_id;

        $estudiante = Estudiante::find($estudiante_id);
        $estudiante->name = $estudiante->nombres.' '.$estudiante->apellidos;

        $profesores = Profesor::orderBy('nombres')->get();;

        return view('formulario.aceptar-formulario-tutor', [
            'formulario' => $formulario,
            'estudiante' => $estudiante,
            'profesores' => $profesores
        ]);
    }
}
