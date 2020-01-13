<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
	  protected $fillable = ['Documento','avance_id'];

      public function avances(){

        return $this->belongsTo(Avance::class);

    }
}
