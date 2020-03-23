@extends('layouts.app')

@section('title')
    Add New Recipe
@endsection

@section('content')
    <div class="main">
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">
                    <h2>Add New Recipe</h2>
                    @include('partials.error')
                    <form action="{{ route('recipes.store') }}" method="POST" id="recipeForm">
                        @csrf
                        <div class="row uniform">
                            <!-- Recipe Info -->
                            <div class="11u$">
                                <input type="text" name="title" placeholder="Recipe Title" required/>
                            </div>
                            <div class="11u$">
                                <textarea name="description" placeholder="Describe your recipe..." rows="6" required></textarea>
                            </div>
                            
                            <!-- Ingredients -->
                            <h4 class="12u$">Ingredients</h4>
                            <div class="2u">
                                <input type="text" class="ingredientAmount" name="ingredients[1][amount]" placeholder="Amount" required/>
                            </div>
                            <div class="2u">
                                <div class="select-wrapper">
                                    <select name="ingredients[1][measurement]" required>
                                        <option value="">- Measurement -</option>
                                        <option value="cup">cup</option>
                                        <option value="pound">lb</option>
                                        <option value="ounce">oz</option>
                                        <option value="teaspoon">tsp</option>
                                        <option value="tablespoon">Tbsp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="7u$">
                                <input type="text" name="ingredients[1][name]" placeholder="Ingredient" required/>
                            </div>
                            <!-- Ingredient 2 -->
                            <div class="2u">
                                <input type="text" class="ingredientAmount" name="ingredients[2][amount]" placeholder="Amount" required/>
                            </div>
                            <div class="2u">
                                <div class="select-wrapper">
                                    <select name="ingredients[2][measurement]" required>
                                        <option value="">- Measurement -</option>
                                        <option value="cup">cup</option>
                                        <option value="pound">lb</option>
                                        <option value="ounce">oz</option>
                                        <option value="teaspoon">tsp</option>
                                        <option value="tablespoon">Tbsp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="7u$">
                                <input type="text" name="ingredients[2][name]" placeholder="Ingredient" required/>
                            </div>
                            <!-- Ingredient 3 -->
                            <div class="2u">
                                <input type="text" class="ingredientAmount" name="ingredients[3][amount]" placeholder="Amount" required/>
                            </div>
                            <div class="2u">
                                <div class="select-wrapper">
                                    <select name="ingredients[3][measurement]" required>
                                        <option value="">- Measurement -</option>
                                        <option value="cup">cup</option>
                                        <option value="pound">lb</option>
                                        <option value="ounce">oz</option>
                                        <option value="teaspoon">tsp</option>
                                        <option value="tablespoon">Tbsp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="7u$">
                                <input type="text" name="ingredients[3][name]" placeholder="Ingredient" required/>
                            </div>

                            <!-- Steps -->
                            <h4 class="12u$">Steps</h4>
                            <div class="1u">
                                <span class="stepNumber">1.</span>
                            </div>
                            <div class="10u$">
                                <input type="text" name="steps[1]" placeholder="Add step instructions..." required/>
                            </div>
                            <div class="1u">
                                <span class="stepNumber">2.</span>
                            </div>
                            <div class="10u$">
                                <input type="text" name="steps[2]" placeholder="Add step instructions..." required/>
                            </div>
                            <div class="1u">
                                <span class="stepNumber">3.</span>
                            </div>
                            <div class="10u$">
                                <input type="text" name="steps[3]" placeholder="Add step instructions..." required/>
                            </div>

                            <!-- Buttons -->
                            <div class="12u$">
                                <ul class="actions">
                                    <li><input type="submit" value="Add Recipe" /></li>
                                    <li><input type="reset" value="Reset" class="alt" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
