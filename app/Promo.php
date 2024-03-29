<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function students()
    {
        return $this->hasMany('Student');
    }

    public function modules()
    {
        return $this->belongsToMany('Module');
    }
}
