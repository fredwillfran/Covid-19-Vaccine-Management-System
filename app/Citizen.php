<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    protected $guarded = [];

    public function healthStatus()
    {
        return $this->hasOne(HealthStatus::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
