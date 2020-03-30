<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'RecipeController@index')->name('home');

// Must be logged in to add recipes and view user home page
Route::middleware('auth')->group(function() {
    Route::get('/recipe/new', 'RecipeController@new')->name('recipes.new');
    Route::post('/recipe', 'RecipeController@store')->name('recipes.store');

    Route::get('/user/{user}', 'UserController@index')->name('user.home');
});

Route::post('/dinners/generate', 'DinnerController@generate')->name('dinners.generate');
