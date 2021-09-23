<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthCenter extends Model
{

    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function vaccines()
    {
        return $this->hasMany(Vaccine::class);
    }
}
