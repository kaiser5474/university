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
            'celular' => $request->celular
        ]);

        //dd($request);

        $formulario = new Formulario; 
        $formulario->estudiante_id = (int)$estudiante->id; 
        $formulario->resumen_actividades = $request->resumen_actividades; 
        $formulario->actividades_realizadas = $request->actividades_realizadas; 
        $formulario->aprendizaje_perfil = $request->aprendizaje_perfil; 
        $formulario->malla_curricular = $request->malla_curricular; 
        $formulario->fecha_inicio_actividades = $request->fecha_inicio; 
        $formulario->fecha_fin_actividades = $request->fecha_fin;
        $formulario->horas_solicitadas = (int)$request->horas_solicitadas; 
        $formulario->fecha_declaracion = $request->fecha_declaracion; 
        $formulario->firma_declaracion = $request->firma_declaracion;       
        $formulario->actividades = $request['flexRadioDefault'];

        //$formulario->save();
        $contents = $path = Storage::path('file.txt');
        Storage::makeDirectory($request->epn);

        dd($request);


        //$archivo = Storage::get('file.txt');
        //return Storage::download('file.txt');
        //dd($archivo);
        //echo asset('storage/file.txt');
        
        //$misdoc = $request->documentacion_soporte; 
        // if($request->hasfile('documentacion_soporte')){
        //     dd("Si entra fichero");
        // }else{
        //     dd("No");
        // }
            
        //foreach($misdoc as $file){

            // ...
            // $filename=$file->getClientOriginalName();
            // $file->move(public_path().'/files/', $name);  
            // $insert[]['file'] = "$filename";
            
            // dd($eldocu->getClientOriginalName());
            //dd($file);
          
          //}
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
