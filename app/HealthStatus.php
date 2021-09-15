<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthStatus extends Model
{
    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }
}
