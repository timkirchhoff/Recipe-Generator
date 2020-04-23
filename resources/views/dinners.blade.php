@extends('layouts.app')

@section('title')
    This Weeks Dinners
@endsection
        
@section('styles')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="main">
        <!-- Section for generating dinners -->
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">
                    <h1>Dinners for the Week</h1>
                    <div id="generated-recipes">
                        @foreach($recipes as $recipe)
                            <div class="card" id="recipe_{{ $recipe->id }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $recipe->title }}</h4>
                                    <p class="card-text">{{ $recipe->description }}</p>
                                    <button type="button" class="button alt small" data-toggle="modal" data-target="#recipe{{ $recipe->id }}Modal">View Recipe</button>                                   
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="recipe{{ $recipe->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="recipe{{ $recipe->id }}Modal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="recipe{{ $recipe->id }}Modal">{{ $recipe->title }}</h3>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Ingredients:</h4>
                                            @foreach(json_decode($recipe->ingredients) as $recipeIngredients)
                                                @foreach(json_decode($recipeIngredients->ingredients) as $ingredient)
                                                    <ul>
                                                        <li>{{ $ingredient->amount }} {{ $ingredient->measurement }} {{ $ingredient->name }}</li>
                                                    </ul>
                                                @endforeach
                                            @endforeach
                                            <h4>Steps:</h4>
                                            @foreach(json_decode($recipe->steps) as $recipeSteps)
                                                @foreach(json_decode($recipeSteps->steps) as $step)
                                                    <ul>
                                                        <li>{{ $step->number }}.  {{ $step->instruction }}</li>
                                                    </ul>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
