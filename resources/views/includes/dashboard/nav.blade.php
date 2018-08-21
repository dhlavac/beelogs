<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
                {{ config('app.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('dashboard/nav.first-level.apiaries') }} <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/dashboard/apiaries') }}">{{ trans('dashboard/nav.second-level.apiaries.list') }}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/dashboard/apiaries/create') }}">{{ trans('dashboard/nav.second-level.apiaries.create') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('dashboard/nav.first-level.hives') }} <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/dashboard/hives') }}">{{ trans('dashboard/nav.second-level.hives.list') }}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/dashboard/hives/create') }}">{{ trans('dashboard/nav.second-level.hives.create') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('dashboard/nav.first-level.colonies') }} <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/dashboard/colonies') }}">{{ trans('dashboard/nav.second-level.colonies.list') }}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/dashboard/colonies/create') }}">{{ trans('dashboard/nav.second-level.colonies.create') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('dashboard/nav.first-level.queens') }} <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/dashboard/queens') }}">{{ trans('dashboard/nav.second-level.queens.list') }}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/dashboard/queens/create') }}">{{ trans('dashboard/nav.second-level.queens.create') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('dashboard/nav.first-level.inspections') }} <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/dashboard/inspections') }}">{{ trans('dashboard/nav.second-level.inspections.list') }}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/dashboard/apiaries/inspections') }}">{{ trans('dashboard/nav.second-level.inspections.create') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('dashboard/nav.first-level.health') }} <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/dashboard/health') }}">{{ trans('dashboard/nav.second-level.health.list') }}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/dashboard/health/create') }}">{{ trans('dashboard/nav.second-level.health.create') }}</a></li>
                    </ul>
                </li>
                {{--<li><a href="{{ url('/') }}"></a></li>--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/settings') }}">Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
