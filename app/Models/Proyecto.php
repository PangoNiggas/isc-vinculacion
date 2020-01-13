<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{

    public $table ="proyectos";

    protected $fillable = ['Actividad','Razonsocial', 'RFC', 'NombreDirector', 'Telefonoemp', 'CorreoEmp', 'Propuesta', 'PropuestaOtra', 'NombreProd', 'Descripcion', 'Organizacion', 'Cual', 'asesor_id', 'emprendedor_id','Estado', 'Semestre', 'created_at', 'updated_at'];

    protected $hidden = [
        'NombreProd', 'remember_token',
    ];

    public function asignacion(){

        return $this->hasOne('App\Models\Asignacion','proyecto_id','id');
    }

    public function emprendedor(){
        
        return $this->belongsTo(Emprendedor::class);
    }

    public function foda(){

        return $this->hasOne('App\Models\Foda','proyecto_id','id');
    }

    public function ideanegocio(){

        return $this->hasOne('App\Models\Ideanegocio','proyecto_id','id');
    }


     public function avances(){

        return $this->hasMany(Avance::class);

    }

    public function scopeNombre($query, $Nombre){

        
        return $query->where('NombreProd','LIKE',"%$Nombre%");
           
       }
}
