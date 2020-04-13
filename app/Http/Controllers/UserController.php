<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\User;

class UserController extends Controller
{
    
    public function index(User $user)
    {
        if ($user->isAdmin()) {
            $recipes = Recipe::all();
        } else {
            $recipes = $user->recipes;
        }
        
        return view('users.home')
            ->with('user', $user)
            ->with('recipes', $recipes);
    }
}
