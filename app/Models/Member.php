<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;


    public function groupe()
{
    return $this->belongsTo('App\Models\Groupe');
}
public function cleaning()
{
    return $this->belongsTo('App\Models\Cleaning');
}
}
