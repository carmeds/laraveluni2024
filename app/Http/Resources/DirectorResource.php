<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DirectorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'iddirector'=>$this->id,
            'nombres'=>$this->nombres,
            'peliculas'=>$this->peliculas,
        ];
    }
}
