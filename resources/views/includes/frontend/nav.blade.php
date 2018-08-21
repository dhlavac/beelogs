<div class="top-left links">
  <a href="{{ url('/') }}">Home</a>
  <a href="{{ url('/features') }}">Features</a>
  <a href="{{ url('/extras') }}">Extras</a>
  <a href="{{ url('/pricing') }}">Pricing</a>
  <a href="{{ url('/trial') }}">Trial</a>
</div>
@if (Route::has('login'))
<div class="top-right links">
    @if (Auth::check())
        <a href="{{ url('/dashboard') }}">Dashboard</a>
    @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    @endif
</div>
@endif
