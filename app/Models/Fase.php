<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;;

class Fase extends Model
{
    public function actividades(){

    	return $this->hasMany(Actividad::class);

    }

    public function avances(){

    	return $this->hasMany(Avance::class);

    }
}
