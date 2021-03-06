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
    Route::get('/recipes/new', 'RecipeController@new')->name('recipes.new');
    Route::post('/recipes', 'RecipeController@store')->name('recipes.store');
    Route::get('/recipes/{recipe}/edit', 'RecipeController@edit')->name('recipes.edit');
    Route::put('/recipes/{recipe}/update-details', 'RecipeController@updateRecipeDetails')->name('recipes.update-details');
    Route::put('/recipes/{recipe}/update-ingredients', 'RecipeController@updateIngredients')->name('recipes.update-ingredients');
    Route::put('/recipes/{recipe}/update-steps', 'RecipeController@updateSteps')->name('recipes.update-steps');
    Route::delete('/recipes/{recipe}', 'RecipeController@destroy')->name('recipes.destroy');
    Route::put('/recipes/{recipe}', 'RecipeController@restore')->name('recipes.restore');

    Route::get('/users/{user}', 'UserController@index')->name('users.home');
});

Route::post('/dinners/generate', 'DinnerController@generate')->name('dinners.generate');
