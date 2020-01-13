<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
	public $table = "asesores";

    protected $fillable = ['Nombre','ApellidoP','ApellidoM','Direccion','Ciudad','Estado','Colonia','CP','RFC','Escolaridad','CURP','Telefono','FechaNacimiento','EstadoCivil','Sexo','Correo','Contraseña','user_id'];

    public function asignaciones(){

    	return $this->hasMany(Asignacion::class);

    }

    public function scopeNombre($query, $Nombre){

        
        return $query->where('Nombre','LIKE',"%$Nombre%");
           
    }

}
