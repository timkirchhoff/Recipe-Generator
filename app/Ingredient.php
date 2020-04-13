<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['recipe_id', 'ingredients'];

    /**
     * Store ingredients for a new recipe
     *
     * @param [type] $recipeId
     * @param [type] $recipe_ingredients
     * @return void
     */
    public static function storeIngredients($recipeId, $recipe_ingredients)
    {   
        $ingredients = [];
        foreach($recipe_ingredients['ingredients'] as $ingredient) {
            array_push($ingredients, $ingredient);
        }
        Ingredient::create([
            'recipe_id' => $recipeId,
            'ingredients' => json_encode($ingredients)
        ]);
    }
}
