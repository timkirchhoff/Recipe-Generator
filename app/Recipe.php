<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function steps()
    {
        return $this->hasMany('App\Step');
    }
}
