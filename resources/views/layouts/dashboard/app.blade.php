<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.dashboard._partials.head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-laravel">
            @include('layouts.dashboard._partials.nav')
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@include('layouts.dashboard._partials.footer')
</html>
