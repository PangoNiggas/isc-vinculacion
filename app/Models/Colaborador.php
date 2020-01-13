<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    public $table ="colaboradores";

    protected $fillable = ['ApellidoPC','ApellidoMC','NombreC', 'CURPC', 'emprendedor_id'];

    public function emprendedor(){

        return $this->belongsTo(Emprendedor::class);
    }
}
