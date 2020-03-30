<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    
    public function index(User $user)
    {
        return view('users.home')
            ->with('user', $user)
            ->with('recipes', $user->recipes);
    }
}
