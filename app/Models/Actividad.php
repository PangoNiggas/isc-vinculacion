<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
	public $table = "actividades";

    protected $fillable = ['Nombre','Descripcion','fase_id'];

    public function fase(){

    return $this->belongsTo(Fase::class);
    }
}

