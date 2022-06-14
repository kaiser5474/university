<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable = ['departamento', 'nombres', 'apellidos', 'cedula', 'correo', 'telefono', 'celular', 'epn', 'profesors_id'];
}
