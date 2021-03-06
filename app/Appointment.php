<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }

    public function healthCenter()
    {
        return $this->belongsTo(HealthCenter::class);
    }
}
