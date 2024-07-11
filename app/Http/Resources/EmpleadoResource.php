<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpleadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idempleado'=>$this->id,
            'apellidos'=>$this->apellidos,
            'nombres'=>$this->nombres,
            'cargo'=>$this->cargo,
            'tratamiento'=>$this->tratamiento,
            'fechanacimiento'=>$this->fechanacimiento,
            'fechacontratacion'=>$this->fechacontratacion,
            'direccion'=>$this->direccion,
            'ciudad'=>$this->ciudad,
            'usuario'=>$this->usuario,
            'codigopostal'=>$this->codigopostal,
            'pais'=>$this->pais,
            'telefono'=>$this->telefono,
            'clave'=>$this->clave,
            'foto'=>$this->foto,
            'jefe'=>$this->jefe,
        ];
    }
}
