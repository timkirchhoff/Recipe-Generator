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
                    <form method="post" action="#">
                        <div class="row uniform">
                            <!-- Recipe Info -->
                            <div class="11u$">
                                <input type="text" name="title" placeholder="Recipe Title" />
                            </div>
                            <div class="11u$">
                                <textarea name="description" placeholder="Describe your recipe..." rows="6"></textarea>
                            </div>
                            
                            <!-- Ingredients -->
                            <h4 class="12u$">Ingredients</h4>
                            <div class="2u">
                                <input type="text" class="ingredientAmount" name="ingredient[1][amount]" placeholder="Amount" />
                            </div>
                            <div class="2u">
                                <div class="select-wrapper">
                                    <select name="ingredient[1][measurement]">
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
                                <input type="text" name="ingredient[1][name]" placeholder="Ingredient" />
                            </div>
                            <!-- Ingredient 2 -->
                            <div class="2u">
                                <input type="text" class="ingredientAmount" name="ingredient[2][amount]" placeholder="Amount" />
                            </div>
                            <div class="2u">
                                <div class="select-wrapper">
                                    <select name="ingredient[2][measurement]">
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
                                <input type="text" name="ingredient[2][name]" placeholder="Ingredient" />
                            </div>
                            <!-- Ingredient 3 -->
                            <div class="2u">
                                <input type="text" class="ingredientAmount" name="ingredient[3][amount]" placeholder="Amount" />
                            </div>
                            <div class="2u">
                                <div class="select-wrapper">
                                    <select name="ingredient[3][measurement]">
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
                                <input type="text" name="ingredient[3][name]" placeholder="Ingredient" />
                            </div>

                            <!-- Steps -->
                            <h4 class="12u$">Steps</h4>
                            <div class="1u">
                                <input type="text" class="stepNumber" name="stepNumber" value="1" />
                            </div>
                            <div class="10u$">
                                <input type="text" name="step[1]" placeholder="Add step instructions..." />
                            </div>
                            <div class="1u">
                                <input type="text" class="stepNumber" name="stepNumber" value="2" />
                            </div>
                            <div class="10u$">
                                <input type="text" name="step[2]" placeholder="Add step instructions..." />
                            </div>
                            <div class="1u">
                                <input type="text" class="stepNumber" name="stepNumber" value="3" />
                            </div>
                            <div class="10u$">
                                <input type="text" name="step[3]" placeholder="Add step instructions..." />
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
