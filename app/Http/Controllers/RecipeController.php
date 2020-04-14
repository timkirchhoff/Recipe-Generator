<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateIngredientRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Http\Requests\UpdateStepRequest;
use App\Ingredient;
use App\Recipe;
use App\Step;

class RecipeController extends Controller
{
    public function index() 
    {
        return view('home');
    }

    public function new()
    {
        return view('recipes.new');
    }

    public function store(StoreRecipeRequest $request)
    {
        $validated_recipe = $request->validated();
        $recipe_details = array_slice($validated_recipe, 0, 3);
        $recipe_ingredients = array_slice($validated_recipe, 3, 1);
        $recipe_steps = array_slice($validated_recipe, 4, 1);
        
        $recipe = Recipe::storeRecipe($recipe_details);
        Ingredient::storeIngredients($recipe->id, $recipe_ingredients);
        Step::storeSteps($recipe->id, $recipe_steps);
        
        session()->flash('success', 'New recipe added!');
        return redirect(route('users.home', $recipe->user_id));
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit')->with('recipe', $recipe);
    }

    public function updateRecipeDetails(UpdateRecipeRequest $request, Recipe $recipe)
    {
        $data = $request->all();
        $recipe->update($data);
        session()->flash('success', 'Recipe details updated successfully!');
        return redirect()->back();
    }

    /**
     * Update a recipe's ingredients in the database
     *
     * @param UpdateIngredientRequest $request
     * @param Recipe $recipe
     * @return void
     */
    public function updateIngredients(UpdateIngredientRequest $request, Recipe $recipe)
    {
        $ingredients = $request->get('ingredients');
        
        $newIngredients = [];
        foreach($ingredients as $ingredient) {
            array_push($newIngredients, $ingredient);
        }
        
        $recipe->ingredients()->update(['ingredients' => json_encode($newIngredients)]);
        
        session()->flash('success', 'Ingredients updated successfully!');
        return redirect()->back();
    }

    /**
     * Update a recipe's steps in the database
     *
     * @param UpdateStepRequest $request
     * @param Recipe $recipe
     * @return void
     */
    public function updateSteps(UpdateStepRequest $request, Recipe $recipe)
    {
        $steps = $request->get('steps');

        $newSteps = [];
        foreach($steps as $stepNumber => $stepInstruction) {
            $step = ['number' => $stepNumber, 'instruction' => $stepInstruction];
            array_push($newSteps, $step);
        }
        
        $recipe->steps()->update(['steps' => json_encode($newSteps)]);

        session()->flash('success', 'Steps updated successfully!');
        return redirect()->back();
    }
}
