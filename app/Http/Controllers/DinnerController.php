<?php

namespace App\Http\Controllers;

class DinnerController extends Controller
{
    public function generate()
    {
        return view('dinners');
    }
}
