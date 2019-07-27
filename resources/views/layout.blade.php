<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SelectWinners') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>