{{-- resources/views/components/nav.blade.php --}}
<nav>
    <a class="nav-logo" href="{{ route('home') }}">
        <div class="logo-mark">VB</div>
        <span class="logo-text">Victoria <span>base</span></span>
    </a>

    <ul class="nav-links">
        <li><a href="{{ url('/#features') }}" class="{{ request()->is('/') ? 'active' : '' }}">Features</a></li>
        <li><a href="{{ url('/#solutions') }}">Solutions</a></li>
        <li><a href="{{ url('/#pricing') }}">Pricing</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
    </ul>

    <div class="nav-actions">
        @auth
            {{-- Logged-in user: go to dashboard --}}
            <a href="{{ route('dashboard') }}" class="btn-ghost">Dashboard</a>
        @else
            {{-- Guest: sign in or register --}}
            <a href="http://localhost:3000/#/login" class="btn-ghost">
    Sign in
</a>
            <a href="{{ route('register') }}" class="btn-primary">Start free trial</a>
        @endauth
    </div>
</nav>
