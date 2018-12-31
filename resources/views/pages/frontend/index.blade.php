<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/fe-styles.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <a href="{{ url('/dashboard') }}">Features</a>
                <a href="{{ route('login') }}">About</a>
                <a href="{{ route('register') }}">Donate</a>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BeeLogs
                </div>

                <div class="subtitle">
                    The open source beekeeping management system
                </div>
            </div>
        </div>
    </body>
</html>
