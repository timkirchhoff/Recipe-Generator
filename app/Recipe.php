<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'description'];
    
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function steps()
    {
        return $this->hasMany('App\Step');
    }

    public static function storeRecipe($recipe_info)
    {
        $recipe = Recipe::create([
            'title' => $recipe_info['title'],
            'description' =>$recipe_info['description']
        ]);

        return $recipe;
    }
}
