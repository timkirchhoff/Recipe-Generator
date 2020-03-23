<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['recipe_id', 'name', 'amount', 'measurement'];

    /**
     * Store ingredients for a new recipe
     *
     * @param [type] $recipeId
     * @param [type] $recipe_ingredients
     * @return void
     */
    public static function storeIngredients($recipeId, $recipe_ingredients)
    {
        foreach($recipe_ingredients as $ingredients) {
            foreach($ingredients as $ingredient) {
                Ingredient::create([
                    'recipe_id' => $recipeId,
                    'name' => $ingredient['name'],
                    'amount' => $ingredient['amount'],
                    'measurement' => $ingredient['measurement']
                ]);
            }
        }   
    }
}
