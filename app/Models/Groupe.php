<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    public function members()
{
    return $this->hasMany('App\Models\Member');
}

public function teltime()
{
    return $this->belongsTo('App\Models\TelTime');
}
}
