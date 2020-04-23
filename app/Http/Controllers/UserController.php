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
            $recipes = Recipe::withTrashed()->where('user_id', $user->id)->get();
        }
        
        return view('users.home')
            ->with('user', $user)
            ->with('recipes', $recipes);
    }
}
