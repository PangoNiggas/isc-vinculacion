<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    public $table = "asignaciones";

    protected $fillable = ['asesor_id','proyecto_id'];

    public function proyecto(){
        
        return $this->belongsTo(Proyecto::class); 

    }

    public function asesor(){

        return $this->belongsTo(Asesor::class);
    }
}
