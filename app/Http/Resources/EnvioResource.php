<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnvioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idempresaenvio'=>$this->id,
            'nombre'=>$this->nombre,
            'telefono'=>$this->telefono,
            'latitud'=>$this->latitud,
            'longitud'=>$this->longitud,
        ];
    }
}
