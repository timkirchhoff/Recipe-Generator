@extends('layouts.app')

@section('title')
    Recipe App
@endsection
        
@section('content')
    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            @include('partials.flash')
            <header>
                <h1>Recipe App</h1>
                <p>Simplifying Your Dinner Decision Making Process</p>
            </header>
            <a href="#main" class="button big scrolly">Get Started</a>
        </div>
    </section>

    <!-- Main -->
    <div id="main">
        <!-- Section for generating dinners -->
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">
                    <h2>How many dinners do you want to make this week?</h2>
                    <form action="#" id="dinnerForm">
                        <input type="text">
                        <button type="submit" class="button big">Generate Recipes</button>
                    </form>
                </div>
            </div>
        </section>
        
        <hr class="major" />
        
        <!-- Section for adding recipes -->
        <section class="wrapper style1">
            <div class="inner">
                <div class="align-center">
                    <h2>Have something yummy to share?</h2>
                    <a href="{{ route('recipes.new') }}" class="button big">Add New Recipe</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="copyright">
            <p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
        </div>
    </footer>
@endsection
