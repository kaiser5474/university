<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'formulario' => 'FCP_001A',
            'version' => '2',
            'carrera' => 'Fisica',
            'actividades' => 'Cursos y Seminarios Profesionales',
            'nombre_estudiante' => 'Jarvis Miranda',
            'cedula_estudiante' => '1234567890',
            'correo_estudiante' => 'jarvis@gmail.com',
            'telefono_estudiante' => '023333333',
            'celular_estudiante' => '0999999999',
        ];
          
        $pdf = PDF::loadView('formulario.myPDF', $data)->setPaper('a4');    
        return $pdf->download('itsolutionstuff.pdf', $data);
        //return view('formulario.myPDF', $data);
    }
}