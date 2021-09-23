<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{

    protected $guarded = [];

    public function healthCenter()
    {
        return $this->belongsTo(HealthCenter::class);
    }
}
