<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Citizen extends Model
{
    use Notifiable;

    protected $guarded = [];

    public function healthStatus()
    {
        return $this->hasOne(HealthStatus::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function routeNotificationForNexmo($notification)
    {
        return $this->phone;
    }
}
