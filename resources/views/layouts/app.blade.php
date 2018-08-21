<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.dashboard.head')
    </head>
    <body>
        <div id="app">
            @include('includes.dashboard.nav')

            @yield('content')
        </div>

        <div class="beelogs-version">
            <p>{{ trans('general.copyright') }}</p>
            <p>{{ trans('general.version') }}</p>
        </div>

        @include('includes.dashboard.scripts')
    </body>
</html>
