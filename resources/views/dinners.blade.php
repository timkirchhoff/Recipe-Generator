@extends('layouts.app')

@section('title')
    This Weeks Dinners
@endsection
        
@section('content')
    <div id="main">
        <!-- Section for generating dinners -->
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">
                    <h1>Dinners for the Week</h1>
                    @foreach($recipes as $recipe)
                        <div id="recipe_{{ $recipe->id }}">
                            <h2>{{ $recipe->title }}</h2>
                            <p>{{ $recipe->description }}</p>
                            <h4>Ingredients</h4>
                            @foreach($recipe->ingredients as $ingredient)
                                <ul>
                                    <li>{{ $ingredient->amount }} {{ $ingredient->measurement }} - {{ $ingredient->name }}</li>
                                </ul>
                            @endforeach
                            <h4>Steps</h4>
                            @foreach($recipe->steps as $step)
                                <ul>
                                    <li>{{ $step->number }} - {{ $step->instruction }}</li>
                                </ul>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
