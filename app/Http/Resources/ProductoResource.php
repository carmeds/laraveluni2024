<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idproducto'=>$this->id,
            'nombre'=>$this->nombre,
            'precio'=>$this->precio,
            'imagenchica'=>$this->imagenchica,
            'preciorebajado'=>$this->preciorebajado,
            'idcategoria'=>$this->categoria_id,
        ];
    }
}
