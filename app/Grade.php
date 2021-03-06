<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function schools()
    {
        return $this->hasMany(School::class);
    }
}
