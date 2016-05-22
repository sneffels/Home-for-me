<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalObservation extends Model
{
    protected $table='medical_valorations';
    public $timestamps=false;

    public function vet()
    {
        return $this->belongsTo('App\Vet');
    }
}
