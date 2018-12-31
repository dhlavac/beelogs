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
<footer class="text-center">
  <span class="float-left" style="padding-left: 15px;">&copy; <?php echo date ("Y"); ?> - 2019 BeeLogs. All rights reserved.</span><span class="float-right" style="padding-right: 15px;">Version: 0.1.0</span>
</footer>
</html>
