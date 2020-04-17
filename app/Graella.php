<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graella extends Model
{
    protected $fillable = [
   
        "horaG",
        "diaG"
    ];

    public function programes(){
        return $this->belongsToMany('App\Programa');
     }
}
