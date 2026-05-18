<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Nile Axis')) — Microfinance Management System</title>
    <meta name="description" content="@yield('meta_description', 'Nile Axis — The complete microfinance management platform for East African financial institutions.')">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- App CSS --}}
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    {{-- Page-specific styles --}}
    @stack('styles')
</head>
<body>

    {{-- Flash messages --}}
    @if (session('success'))
        <div class="flash flash-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="flash flash-error">{{ session('error') }}</div>
    @endif

    {{-- Page content --}}
    @yield('content')

    {{-- App JS --}}
    <script src="{{ asset('js/landing.js') }}"></script>

    {{-- Page-specific scripts --}}
    @stack('scripts')

</body>
</html>
