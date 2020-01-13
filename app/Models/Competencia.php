<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competencia extends Model
{
    


    public function ideanegocio(){

        return $this->belongsTo(Ideanegocio::class);
    }
}
