<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable=['nombreempresa','nombrecontacto','cargocontacto','direccion',
                        'ciudad','region','codigopostal','pais','telefono','fax'];
}
