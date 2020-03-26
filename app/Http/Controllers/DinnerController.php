<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenerateRecipeRequest;
use App\Recipe;

class DinnerController extends Controller
{
    public function generate(GenerateRecipeRequest $request)
    {
        $numDinners = $request->input('dinners');
        $allRecipeIds = Recipe::getRecipeIds();
        $randomRecipeIds = $allRecipeIds->random($numDinners);
        $recipes = Recipe::find($randomRecipeIds);

        return view('dinners')->with('recipes', $recipes);
    }
}
