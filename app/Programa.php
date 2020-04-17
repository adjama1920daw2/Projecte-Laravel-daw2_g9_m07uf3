<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
   protected $fillable = [
      "nomP",
      "descripcioP",
      "tipusP",
      "classificacioP",
      "idC"
  ];
    public function canal(){
        return $this->belongsTo('App\Canal');
     }

     public function graelles(){
        return $this->belongsToMany('App\Graella');
     }
}
