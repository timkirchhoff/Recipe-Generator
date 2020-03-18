<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recipe App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
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
                            <p>--FORM GOES HERE--</p>
                        </div>
                    </div>
                </section>
                    
                <!-- Section for generating dinners -->
                <section class="wrapper style2">
                    <div class="inner">
                        <div class="align-center">
                            <h2>Have something yummy you would like to share?</h2>
                            <a href="#" class="button big">Add New Recipe</a>
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

		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('js/skel.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
