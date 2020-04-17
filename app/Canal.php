<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $fillable = [
        "nomC"
    ];

 public function prgrames(){
    return $this->hasMany('App\Programa');
 }
}
