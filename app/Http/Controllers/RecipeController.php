<?php

namespace App\Http\Controllers;

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
}
