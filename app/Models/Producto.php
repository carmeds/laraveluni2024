<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;
    protected $fillable=['nombre','precio','imagenchica','preciorebajado','categoria_id'];

    // para el query scope:
    protected $allowFilter=['categoria_id','id'];


    public function scopeFilter(Builder $query){
        if(empty($this->allowFilter) || empty(request('filter'))){
            return;
        }
        $filters=request('filter');
        $allowFilter=collect($this->allowFilter);

        foreach($filters as $filter =>$value){
            if($allowFilter->contains($filter)){
                $query->where($filter,$value);
            }
        }

    }
}
