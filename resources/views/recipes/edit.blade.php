@extends('layouts.app')

@section('title')
    Edit Recipe
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="alt">
        <div class="container">
            <a href="{{ route('users.home', Auth::id()) }}">Back</a>
        </div>
    </header>

    <div class="main">
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">
                    @include('partials.flash')
                    @include('partials.error')
                    <h2>Edit {{ $recipe->title }}</h2>
                    <form action="{{ route('recipes.update-details', $recipe->id) }}" method="POST" id="update_recipe_form">
                        @csrf
                        @method('PUT')
                        <!-- ====== Recipe Info ====== -->
                        <div class="row uniform" id="recipe_info">
                            <div class="12u$">
                                <input type="text" name="title" value="{{ $recipe->title }}" placeholder="Recipe Title" required/>
                            </div>
                            <div class="12u$">
                                <textarea name="description" placeholder="Describe your recipe..." rows="6" required>{{ $recipe->description }}</textarea>
                            </div>
                        </div>

                        <!-- ====== User ID ====== -->
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}" required>
                        
                        <!-- ====== Submit Button ====== -->
                        <div class="row uniform" id="button_row">
                            <div class="12u$">
                                <button type="submit" class="button big" id="update_details">Update Details</button>
                            </div>
                        </div>
                    </form>

                    <!-- ====== Ingredients ====== -->
                    <h4 class="12u$" id="ingredients_heading">Ingredients</h4>
                    <form action="{{ route('recipes.update-ingredients', $recipe->id) }}" method="POST" id="update_ingredients_form">
                        @csrf
                        @method('PUT')
                        <div id="ingredients">
                            @foreach(json_decode($recipe->ingredients[0]['ingredients']) as $count => $ingredient)
                                <div class="row uniform" id="ingredient{{ $count+1 }}">
                                    <div class="2u">
                                        <input type="text" class="ingredientAmount" name="ingredients[{{ $count+1 }}][amount]" value="{{  $ingredient->amount  }}" placeholder="Amount" required/>
                                    </div>
                                    <div class="2u">
                                        <div class="select-wrapper">
                                            <select name="ingredients[{{ $count+1 }}][measurement]" required>
                                                <option value="">- Measurement -</option>
                                                <option value="cup" {{ $ingredient->measurement === "box" ? 'selected' : '' }}>box</option>
                                                <option value="cup" {{ $ingredient->measurement === "cup" ? 'selected' : '' }}>cup</option>
                                                <option value="cup" {{ $ingredient->measurement === "large" ? 'selected' : '' }}>large</option>
                                                <option value="pound" {{ $ingredient->measurement === "pound" ? 'selected' : '' }}>lb</option>
                                                <option value="pound" {{ $ingredient->measurement === "medium" ? 'selected' : '' }}>medium</option>
                                                <option value="ounce" {{ $ingredient->measurement === "ounce" ? 'selected' : '' }}>oz</option>
                                                <option value="ounce" {{ $ingredient->measurement === "package" ? 'selected' : '' }}>package</option>
                                                <option value="ounce" {{ $ingredient->measurement === "small" ? 'selected' : '' }}>small</option>
                                                <option value="teaspoon" {{ $ingredient->measurement === "teaspoon" ? 'selected' : '' }}>tsp</option>
                                                <option value="tablespoon" {{ $ingredient->measurement === "tablespoon" ? 'selected' : '' }}>Tbsp</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="7u">
                                        <input type="text" name="ingredients[{{ $count+1 }}][name]" value="{{ $ingredient->name }}" placeholder="Ingredient" required/>
                                    </div>
                                    <div class="1u$">
                                        @if($count+1 > 1)
                                            <button type="button" name="remove_ingredient" class="remove_ingredient" id="{{ $count+1 }}">-</button>
                                        @else
                                            <button type="button" name="add_ingredient" id="add_ingredient">+</button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- ====== Update Ingredients Button ====== -->
                        <div class="row uniform" id="button_row">
                            <div class="12u$">
                                <button type="submit" class="button big" id="update_ingredients">Update Ingredients</button>
                            </div>
                        </div>
                    </form>
                        
                    <!-- ====== Steps ====== -->
                    <div id="steps">
                        <h4 class="12u$" id="steps_heading">Steps</h4>
                        <form action="#" method="POST" id="update_steps_form">
                            @foreach(json_decode($recipe->steps[0]['steps']) as $count => $step)
                            <div class="row uniform" id="step{{ $count+1 }}">
                                    <div class="1u stepNumber">{{ $count+1 }}.</div>
                                    <div class="10u">
                                        <input type="text" name="steps[{{ $count+1 }}]" value="{{ $step->instruction }}" placeholder="Add step instructions..." required/>
                                    </div>
                                    <div class="1u$">
                                        @if($count+1 > 1)
                                            <button type="button" name="remove_step" class="remove_step" id="{{ $count+1 }}">-</button>
                                        @else
                                            <button type="button" name="add_step" id="add_step">+</button>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <!-- ====== Submit Button ====== -->
                            <div class="row uniform" id="button_row">
                                <div class="12u$">
                                    <button type="submit" class="button big" id="update_steps">Update Steps</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            var ingredient_count = $('#ingredients > div').length;
            var step_count = $('#steps > div').length;

            if(step_count > 2){
                $('.remove_step').prop('disabled', true);
                $('.remove_step:last').removeProp('disabled');
            }

            $('#add_ingredient').click(function(){
                ingredient_count++;
                $('#ingredients').append('<div class="row uniform" id="ingredient'+ingredient_count+'"><div class="2u"><input type="text" class="ingredientAmount" name="ingredients['+ingredient_count+'][amount]" placeholder="Amount" required></div><div class="2u"><div class="select-wrapper"><select name="ingredients['+ingredient_count+'][measurement]" required><option value="">- Measurement -</option><option value="box">box</option><option value="cup">cup</option><option value="large">large</option><option value="pound">lb</option><option value="medium">medium</option><option value="ounce">oz</option><option value="package">package</option><option value="small">small</option><option value="teaspoon">tsp</option><option value="tablespoon">Tbsp</option></select></div></div><div class="7u"><input type="text" name="ingredients['+ingredient_count+'][name]" placeholder="Ingredient" required></div><div class="1u$"><button type="button" name="remove_ingredient" class="remove_ingredient" id="'+ingredient_count+'">-</button></div></div>');
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
