<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrearUsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('crear-usuario');
    }

    public function nuevoFormulario(Request $request)
    {
        $request->user()->authorizeRoles(['estudiante']);
        
        $id = $request->user()->id;
        $user = DB::table('estudiantes')->where('user_id', $id)->first();
        $nombres = $user->nombres.' '.$user->apellidos;
        $epn = $user->epn;
        $carrera = $user->carrera;
        $cedula = $user->cedula;
        $correo = $user->correo;
        $telefono = $user->telefono;
        $celular = $user->celular;
        //dd($user);        
        return view('estudiante.nuevo-formulario', [
            'id' => $id,
            'epn' => $epn,
            'name' => $nombres, 
            'carrera' => $carrera,
            'cedula' => $cedula,
            'correo' => $correo,
            'telefono' => $telefono,
            'celular' => $celular,
        ]);
    }

    
}
