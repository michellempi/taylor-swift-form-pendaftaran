<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A fictional fan-made Taylor Swift concert registration demo. No real tickets are offered.">
    <title>@yield('title', 'Concert Night · A fan-made demo')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/concert.css') }}" rel="stylesheet">
    @stack('head')
</head>
<body>
    <div class="demo-banner">
        <span aria-hidden="true">✦</span> Proyek demo fiktif — bukan situs resmi, bukan penjualan tiket, dan tidak berafiliasi dengan Taylor Swift.
    </div>
    <header class="site-header">
        <a class="brand" href="{{ route('home') }}" aria-label="Concert Night demo home">
            <span class="brand-mark">✳</span>
            <span>CONCERT NIGHT <small>THE FAN-MADE DEMO</small></span>
        </a>
        <nav aria-label="Main navigation">
            <a href="{{ route('home') }}#the-night">The night</a>
            <a href="{{ route('home') }}#tickets">Ticket tiers</a>
            <a class="nav-register" href="{{ route('registrations.create') }}">Register <span aria-hidden="true">↗</span></a>
        </nav>
    </header>
    <div class="page-shell">
        @yield('content')
    </div>
    <footer class="site-footer">
        <a class="brand footer-brand" href="{{ route('home') }}"><span class="brand-mark">✳</span><span>CONCERT NIGHT</span></a>
        <p>Made for learning, not for ticketing. No official tickets or artist affiliation.</p>
        <span>© {{ date('Y') }} · A fictional project</span>
    </footer>
    <script src="{{ asset('js/concert.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
