<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public $timestamps=false;


    public function species()
    {
        return $this->belongsTo('App\Species');
    }
    public function status()
    {
        return $this->hasMany('App\StatusAnimal');
    }
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
    public function adoption()
    {
        return $this->hasOne('App\Adoption');
    }
}