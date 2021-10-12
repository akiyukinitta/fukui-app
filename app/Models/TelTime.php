<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelTime extends Model
{
    use HasFactory;

    public function groupe()
{
    return $this->hasOne('App\Models\Groupe');
}
}
