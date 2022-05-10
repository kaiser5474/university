<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ProfesorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'indexByEPN']]);
    }

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByEPN(Request $request)
    {
        //Consultando a la API para Seleccionar el profesor dado un EPN
        try {
            if($request->cookie('XSRF-TOKEN') != ""){
                $response = Http::post('http://127.0.0.1:8080/api/profesoresEPN', [
                    'busqueda' => $request->busqueda,
                ]);
                $profesor = new Profesor();
                $profesor->departamento = $response['departamento'];
                $profesor->nombres = $response['nombres'];
                $profesor->apellidos = $response['apellidos'];
                $profesor->cedula = $response['cedula'];
                $profesor->correo = $response['correo'];
                $profesor->telefono = $response['telefono'];
                $profesor->celular = $response['celular'];
                $profesor->epn = $response['epn'];
                
                return view('profesor.insert')->with('profesor', $profesor);
                //return response()->json(json_decode($response), 201); 
            }
        } catch (\Throwable $th) {
            //echo $th;
            return response()->json(json_decode($th), 403); 
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
