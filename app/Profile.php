<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\User;

class Profile extends Model
{
    protected $guarded = [];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
