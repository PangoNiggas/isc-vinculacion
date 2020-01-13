<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprendedor extends Model
{
    public $table ="emprendedores";
    protected $fillable = ['Nombre', 'ApellidoP', 'ApellidoM', 'FechaNaci', 'Edad', 'Sexo', 'EstadoCivil', 'Direccion', 'NumeroExterior', 'NumeroInterior', 'Colonia', 'Ciudad', 'Municipio', 'CodigoPostal', 'TelefonoCel', 'TelefonoOfi', 'TelefonoCasa', 'Correo', 'Escolaridad', 'TipoPersona', 'CURP', 'INE', 'RFC', 'RFCM', 'RazonSocial', 'ObjetivoSocial', 'TipoEmpresa', 'TipoOtra'];
 

    protected $hidden = [
        'Nombre', 'remember_token',
    ];

    public function proyectos(){

        return $this->hasMany(Proyecto::class);
    }

    public function colaboradores(){

        return $this->hasMany(Colaborador::class);
    }

    public function scopeNombre($query, $Nombre){

        
     return $query->where('Nombre','LIKE',"%$Nombre%");
        
    }

    public function user(){

        return $this->hasOne(User::class);
    }
}
