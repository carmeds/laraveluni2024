<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaisResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idpais'=>$this->id,
            'codpais'=>$this->codpais,
            'pais'=>$this->pais,
            'capital'=>$this->capital,
            'area'=>$this->area,
            'poblacion'=>$this->poblacion,
            'continente'=>$this->continente,
        ];
    }
}
