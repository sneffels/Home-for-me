<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BehaviorObservation extends Model
{
    protected $table='behavior_observations';
    public $timestamps=false;

    public function volunteer()
    {
        return $this->belongsTo('App\Volunteer');
    }
}
