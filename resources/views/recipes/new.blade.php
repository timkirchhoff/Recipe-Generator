@extends('layouts.app')

@section('title')
    Add New Recipe
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="alt">
        <div class="container">
            <a href="{{ route('home') }}">Home</a>
        </div>
    </header>

    <div class="main">
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">
                    <h2>Add New Recipe</h2>
                    @include('partials.error')
                    <form action="{{ route('recipes.store') }}" method="POST" id="add_recipe_form">
                        @csrf
                        <!-- ====== Recipe Info ====== -->
                        <div class="row uniform" id="recipe_info_row">
                            <div class="12u$">
                                <input type="text" name="title" placeholder="Recipe Title" required/>
                            </div>
                            <div class="12u$">
                                <textarea name="description" placeholder="Describe your recipe..." rows="6" required></textarea>
                            </div>
                        </div>

                        <!-- ====== Ingredients ====== -->
                        <div id="ingredients">
                            <h4 class="12u$" id="ingredients_heading">Ingredients</h4>
                            <div class="row uniform" id="ingredient1">
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
                                <div class="7u">
                                    <input type="text" name="ingredients[1][name]" placeholder="Ingredient" required/>
                                </div>
                                <div class="1u$">
                                    <button type="button" name="add_ingredient" id="add_ingredient">+</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- ====== Steps ====== -->
                        <div id="steps">
                            <h4 class="12u$" id="steps_heading">Steps</h4>
                            <div class="row uniform" id="step1">
                                <div class="1u stepNumber">1.</div>
                                <div class="10u">
                                    <input type="text" name="steps[1]" placeholder="Add step instructions..." required/>
                                </div>
                                <div class="1u$">
                                    <button type="button" name="add_step" id="add_step">+</button>
                                </div>
                            </div>
                        </div>

                        <!-- ====== User ID ====== -->
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}" required>

                        <!-- ====== Submit Button ====== -->
                        <div class="row uniform" id="button_row">
                            <div class="12u$">
                                <button type="submit" class="button big" id="add_recipe">Add Recipe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            var ingredient_count = 1;
            var step_count = 1;

            $('#add_ingredient').click(function(){
                ingredient_count++;
                $('#ingredients').append('<div class="row uniform" id="ingredient'+ingredient_count+'"><div class="2u"><input type="text" class="ingredientAmount" name="ingredients['+ingredient_count+'][amount]" placeholder="Amount" required></div><div class="2u"><div class="select-wrapper"><select name="ingredients['+ingredient_count+'][measurement]" required><option value="">- Measurement -</option><option value="cup">cup</option><option value="pound">lb</option><option value="ounce">oz</option><option value="teaspoon">tsp</option><option value="tablespoon">Tbsp</option></select></div></div><div class="7u"><input type="text" name="ingredients['+ingredient_count+'][name]" placeholder="Ingredient" required></div><div class="1u$"><button type="button" name="remove_ingredient" class="remove_ingredient" id="'+ingredient_count+'">-</button></div></div>');
            });

            $(document).on('click', '.remove_ingredient', function(){
                var ingredient_id = $(this).attr("id");
                $('#ingredient'+ingredient_id+'').remove();
            });

            $('#add_step').click(function(){
                step_count++;
                $('#steps').append('<div class="row uniform" id="step'+step_count+'"><div class="1u stepNumber">'+step_count+'.</div><div class="10u"><input type="text" name="steps['+step_count+']" placeholder="Add step instructions..." required></div><div class="1u$"><button type="button" name="remove_step" class="remove_step" id="'+step_count+'">-</button></div></div>');
                if(step_count > 2){
                    $('.remove_step').prop('disabled', true);
                    $('.remove_step:last').removeProp('disabled');
                }
            });

            $(document).on('click', '.remove_step', function(){
                var step_id = $(this).attr("id");
                $('#step'+step_id+'').remove();
                step_count--;
                $('.remove_step:last').removeProp('disabled');
            });
        });
    </script>
@endsection
