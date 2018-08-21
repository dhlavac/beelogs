<!doctype html>
@include('includes.frontend.header-art')
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.frontend.head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @include('includes.frontend.nav')

            @yield('content')
        </div>

        @include('includes.frontend.scripts')
    </body>
</html>
