<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable=['apellidos','nombres','cargo','tratamiento','fechanacimiento','fechacontratacion',
    'direccion','ciudad','usuario','codigopostal','pais','telefono','clave','foto','jefe'];
}
