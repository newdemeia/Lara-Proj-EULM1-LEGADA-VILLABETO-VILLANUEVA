<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Discover the history and cultural heritage of Butuan.">

    <meta name="theme-color" content="#781d16">

    <title>@yield('title', 'National Museum of the Philippines - Butuan')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('styles')
</head>
<body>

    <a href="#main-content" class="skip-link">Skip to content</a>

    <header class="site-header">
    <div class="header-inner">

        <a href="{{ route('home') }}" class="brand">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Museum logo"
                class="brand-logo"
            >
            <span class="brand-name">
                National Museum of the Philippines - Butuan
            </span>
        </a>

        <button
            class="nav-toggle"
            type="button"
            aria-label="Open navigation"
            aria-expanded="false"
            aria-controls="site-navigation"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="site-nav" id="site-navigation" aria-label="Main navigation">
            <a
                href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'active' : '' }}"
                @if(request()->routeIs('home')) aria-current="page" @endif
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                class="{{ request()->routeIs('about') ? 'active' : '' }}"
                @if(request()->routeIs('about')) aria-current="page" @endif
            >
                About
            </a>

            <a
                href="{{ route('contact') }}"
                class="nav-cta {{ request()->routeIs('contact') ? 'active' : '' }}"
                @if(request()->routeIs('contact')) aria-current="page" @endif
            >
                Contact
            </a>
        </nav>

    </div>
</header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-main">

            <div class="footer-brand">
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt=""
                    class="footer-logo"
                >

                <div>
                    <p class="footer-eyebrow">
                        HISTORY · CULTURE · HERITAGE
                    </p>

                    <h2>Stories that connect us to the past.</h2>

                    <p class="footer-intro">
                        Discover the history, artifacts, and cultural
                        heritage that make Butuan special.
                    </p>
                </div>
            </div>

            <div class="footer-links">
                <h3>Explore</h3>

                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About the Museum</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>

            <div class="footer-links">
                <h3>Project Team</h3>

                <p>Villabeto · Legada · Villanueva</p>

                <p class="footer-note">
                    Educational website project.
                    This is not the official museum website.
                </p>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                © {{ date('Y') }}
                National Museum of the Philippines — Butuan
                website concept.
            </p>

            <a href="{{ route('home') }}">Back to top ↑</a>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('scripts')

</body>
</html>
