<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cpotencial extends Model
{
    public $table ="cpotenciales";



    public function ideanegocio(){

        return $this->belongsTo(Ideanegocio::class);
    }

}
