<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\Estudiante;
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
        //
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
        $formulario->estudiante_id = (int)$estudiante->id; 
        $formulario->estado = "proceso"; 
        $formulario->resumen_actividades = $request->resumen_actividades; 
        $formulario->actividades_realizadas = $request->actividades_realizadas; 
        $formulario->aprendizaje_perfil = $request->aprendizaje_perfil; 
        $formulario->malla_curricular = $request->malla_curricular; 
        $formulario->fecha_inicio_actividades = $request->fecha_inicio; 
        $formulario->fecha_fin_actividades = $request->fecha_fin;
        $formulario->horas_solicitadas = (int)$request->horas_solicitadas; 
        $formulario->fecha_declaracion = $request->fecha_declaracion; 

        //$formulario->tipo_institucion2 = $request->tipo_institucion2;
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
        $formulario->actividades = $request['flexRadioDefault'];

        $formulario->save();
       
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
        //dd($request);
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
    public function destroy(Formulario $formulario)
    {
        //
    }
}
