<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\DB;

class EstudiantesController extends Controller
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
        $estudiantes = Estudiante::all();
        //return response()->json($estudiantes, 201);
        return view('estudiante.index', ['estudiantes' => $estudiantes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexByEPN(Request $request)
    {
        //
        $result = DB::table('estudiantes')
                    ->select('*')
                    ->where('epn', $request->busqueda)
                    ->first();
        return response()->json($result, 201);            
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
        $request->validate([
            'cedula' => 'required|min:10',
            'correo' => 'required|min:6',
            'epn' => 'required|min:10'
        ]);

        $estudiante = new Estudiante;
        $estudiante->cedula = $request->cedula;
        $estudiante->correo = $request->correo;
        $estudiante->epn = $request->epn;

        $estudiante->carrera = $request->carrera;
        $estudiante->nombres = $request->nombres;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->telefono = $request->telefono;
        $estudiante->celular = $request->celular;         

        $estudiante->save();

        return redirect()->route('estudiantes')->with('success', 'Estudiante insertado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
