<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
     public function fase(){

    return $this->belongsTo(Fase::class);
    }

     public function proyecto(){

    return $this->belongsTo(Proyecto::class);
    }

     public function revicion(){

    return $this->hasOne(Revision::class);
    }
}
 