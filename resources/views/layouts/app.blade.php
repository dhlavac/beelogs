<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('_partials.dashboard.head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-laravel">
            @include('_partials.dashboard.nav')
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@include('_partials.dashboard.footer')
</html>
