<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = ['recipe_id', 'steps'];

    /**
     * Store steps for a new recipe
     *
     * @param [type] $recipeId
     * @param [type] $recipe_steps
     * @return void
     */
    public static function storeSteps($recipeId, $recipe_steps)
    {
        $steps = [];
        foreach($recipe_steps['steps'] as $stepNumber => $stepInstruction) {
            $step = ['number' => $stepNumber, 'instruction' => $stepInstruction];
            array_push($steps, $step);
        }
        Step::create([
            'recipe_id' => $recipeId,
            'steps' => json_encode($steps)
        ]);
    }
}
