<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    public $timestamps=false;
    public function breed()
    {
        return $this->hasMany('App\Breed');
    }
}
