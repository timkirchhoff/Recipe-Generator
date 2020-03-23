<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['title', 'description'];
    
    /**
     * Relationship between Recipe and Ingredient
     * Given a recipe, return the ingrdients
     *
     * @return void
     */
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    /**
     * Relationship between Recipe and Step
     * Given a recipe, return the steps
     *
     * @return void
     */
    public function steps()
    {
        return $this->hasMany('App\Step');
    }

    /**
     * Create Recipe object using title and description.
     * Return the Recipe object
     *
     * @param [type] $recipe_info
     * @return void
     */
    public static function storeRecipe($recipe_info)
    {
        $recipe = Recipe::create([
            'title' => $recipe_info['title'],
            'description' =>$recipe_info['description']
        ]);

        return $recipe;
    }
}
