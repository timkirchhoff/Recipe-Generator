@extends('layouts.app')

@section('title')
    Recipe App
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="alt">
        @guest
            <a href="{{ route('login') }}">Sign In</a>
            <a href="{{ route('register') }}">Register</a>
        @else
            <a href="#">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </header>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            @include('partials.flash')
            @include('partials.error')
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
                    <form action="{{ route('dinners.generate') }}" method="POST" id="generate_dinners_form">
                        @csrf
                        <input type="text" name="dinners" id="dinners" required>
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
