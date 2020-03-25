<?php

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

Route::get('/', 'RecipeController@index')->name('home');
Route::get('/recipe/new', 'RecipeController@new')->name('recipes.new');
Route::post('/recipe', 'RecipeController@store')->name('recipes.store');

Route::post('/dinners/generate', 'DinnerController@generate')->name('dinners.generate');
