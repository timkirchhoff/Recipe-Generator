<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'user_id'];
    
    /**
     * Relationship between Recipe and User
     * Given a recipe, return the owning user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
     * Relationship between Recipe and Ingredient
     * Given a recipe, return the ingredients
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
    public static function storeRecipe($recipe_details)
    {
        $recipe = Recipe::create([
            'title' => $recipe_details['title'],
            'description' => $recipe_details['description'],
            'user_id' => $recipe_details['user_id']
        ]);

        return $recipe;
    }

    /**
     * Get all recipe Ids
     *
     * @return void
     */
    public static function getRecipeIds()
    {
        return Recipe::get('id');
    }
}
