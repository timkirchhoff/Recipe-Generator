<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('js/skel.min.js') }}"></script>
        <script src="{{ asset('js/util.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('scripts')
    </body>
</html>
