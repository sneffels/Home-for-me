<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $table='breeds';
    public $timestamps=false;
 public function species()
 {
     return $this->belongsTo('App\Species');
 }
}
