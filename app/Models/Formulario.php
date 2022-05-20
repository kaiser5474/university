<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $fillable = [
        'resumen_actividades', 
        'actividades_realizadas', 
        'aprendizaje_perfil', 
        'malla_curricular',
        'actividades',
        'fecha_inicio_actividades',
        'fecha_fin_actividades',
        'horas_solicitadas',
        'fecha_declaracion',
        'firma_declaracion'
    ];
}
