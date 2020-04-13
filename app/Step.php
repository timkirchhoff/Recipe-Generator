<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = ['recipe_id', 'recipe_steps'];

    /**
     * Store steps for a new recipe
     *
     * @param [type] $recipeId
     * @param [type] $recipe_steps
     * @return void
     */
    public static function storeSteps($recipeId, $recipe_steps)
    {
        foreach($recipe_steps['steps'] as $stepNumber => $stepInstruction) {
            Step::create([
                'recipe_id' => $recipeId,
                'number' => $stepNumber,
                'instruction' => $stepInstruction
            ]);
        }
    }
}
