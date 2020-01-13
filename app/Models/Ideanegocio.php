<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ideanegocio extends Model
{
    protected $fillable = ['definicion','croquis','tipodomicilio', 'tipoasentamiento', 'tipoasenotro', 'nombreasentamiento', 'numerointerior', 'numeroexterior', 'localidad', 'municipio', 'estado', 'codigopostal', 'superficie', 'referencia', 'proyecto_id'];

    public function proyecto(){

        return $this->belongsTo('App\Models\Proyecto');
    }

    public function cpotenciales(){

        return $this->hasMany(Cpotencial::class);
    }

    public function competencias(){

        return $this->hasMany(Competencia::class);
    }


}
