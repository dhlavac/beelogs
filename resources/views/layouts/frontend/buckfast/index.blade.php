<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.frontend.buckfast._partials.head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('layouts.frontend.buckfast._partials.nav')

            @yield('content')
        </div>
    </body>
</html>
