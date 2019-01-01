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
