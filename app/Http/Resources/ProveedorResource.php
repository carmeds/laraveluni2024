<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProveedorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idproveedor'=>$this->id,
            'nombreempresa'=>$this->nombreempresa,
            'nombrecontacto'=>$this->nombrecontacto,
            'cargocontacto'=>$this->cargocontacto,
            'direccion'=>$this->direccion,
            'ciudad'=>$this->ciudad,
            'region'=>$this->region,
            'codigopostal'=>$this->codigopostal,
            'pais'=>$this->pais,
            'telefono'=>$this->telefono,
            'fax'=>$this->fax,
        ];
    }
}
