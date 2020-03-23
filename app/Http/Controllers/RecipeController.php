<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Ingredient;
use App\Recipe;

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
        $recipe_info = array_slice($validated_recipe, 0, 2);
        $recipe_ingredients = array_slice($validated_recipe, 2, 1);
        // $recipe_steps = array_slice($validated_recipe, 3, 1);
        
        $recipe = Recipe::storeRecipe($recipe_info);
        Ingredient::storeIngredients($recipe->id, $recipe_ingredients);
        
        // dd($recipe->id);
        // return view('recipes.show')->with('data', $validated_recipe);
    }
}
