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
        'firma_declaracion',
        'tipo_institucion',
        'razon_social',
        'ruc',
        'direccion',
        'telefono',
        'celular',
        'ciudad_pais',
        'correo',
        'tipo_institucion2',
        'campo_amplio',
        'campo_especifico',
        'codigo_proyecto_convenio',
        'nombre_proyecto_convenio',
    ];
}
