<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foda extends Model
{
     protected $fillable = ['Fortaleza','Oportunidades','Debilidades', 'Amenazas', 'proyecto_id' ];

    public function proyecto(){

        return $this->belongsTo('App\Models\Proyecto');
    }
}
