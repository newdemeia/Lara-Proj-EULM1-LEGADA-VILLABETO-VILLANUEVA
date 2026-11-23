@extends('layouts.app')

@section('title', 'Home | National Museum of the Philippines — Butuan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<section class="hero" aria-label="Museum highlights">

    <div class="hero-slides">

        <div class="hero-slide active">
            <img src="{{ asset('images/gallery1.jpg') }}"
                 alt="Traditional garments on display">
        </div>

        <div class="hero-slide">
            <img src="{{ asset('images/gallery2.jpg') }}"
                 alt="Museum gallery and historic objects">
        </div>

        <div class="hero-slide">
            <img src="{{ asset('images/gallery3.jpg') }}"
                 alt="Historic wooden boat remains">
        </div>

        <div class="hero-slide">
            <img src="{{ asset('images/gallery4.jpg') }}"
                 alt="Museum exhibition room">
        </div>

    </div>

    <div class="hero-shade"></div>

    <div class="hero-content">
        <p class="eyebrow hero-eyebrow">
            <span></span>
            NATIONAL MUSEUM OF THE PHILIPPINES · BUTUAN
        </p>

        <h1>
            Discover Butuan’s<br>
            <em>Rich History</em>
        </h1>

        <p class="hero-description">
            Explore the stories, artifacts, and cultural heritage
            that connect Butuan’s past with its future.
        </p>

        <a class="button button-light" href="{{ route('contact') }}">
            Plan Your Visit <span aria-hidden="true">↗</span>
        </a>
    </div>

    <div class="hero-controls">
        <button class="hero-arrow hero-prev"
                type="button"
                aria-label="Previous image">←</button>

        <div class="hero-dots">
            <button class="hero-dot active" type="button"
                    aria-label="Show image 1" aria-pressed="true"></button>
            <button class="hero-dot" type="button"
                    aria-label="Show image 2" aria-pressed="false"></button>
            <button class="hero-dot" type="button"
                    aria-label="Show image 3" aria-pressed="false"></button>
            <button class="hero-dot" type="button"
                    aria-label="Show image 4" aria-pressed="false"></button>
        </div>

        <button class="hero-arrow hero-next"
                type="button"
                aria-label="Next image">→</button>
    </div>

    <div class="hero-counter">
        <span class="hero-current">01</span>
        <span class="counter-line"></span>
        <span>04</span>
    </div>

</section>

<div class="intro-strip">
    <p><span class="intro-mark">✳</span>
        A place to discover, learn, and remember.
    </p>

    <span class="intro-location">
        BUTUAN CITY · AGUSAN DEL NORTE
    </span>
</div>

<section class="section gallery-section">

    <div class="section-heading">
        <div>
            <p class="eyebrow">TAKE A CLOSER LOOK</p>
            <h2>Explore the <em>Museum</em></h2>
        </div>

        <p class="section-lede">
            Every object holds a story. Explore a few of the spaces
            and collections that bring history to life.
        </p>
    </div>

    <div class="museum-grid">

        <a class="museum-card" href="{{ route('about') }}">
            <div class="card-image">
                <img src="{{ asset('images/gallery1.jpg') }}"
                     alt="Traditional garments and textiles"
                     loading="lazy">
                <span class="card-number">01</span>
            </div>
            <div class="card-caption">
                <div>
                    <h3>Culture & Craft</h3>
                    <p>Traditions preserved through generations</p>
                </div>
                <span class="card-arrow">↗</span>
            </div>
        </a>

        <a class="museum-card" href="{{ route('about') }}">
            <div class="card-image">
                <img src="{{ asset('images/gallery2.jpg') }}"
                     alt="Museum gallery and historical objects"
                     loading="lazy">
                <span class="card-number">02</span>
            </div>
            <div class="card-caption">
                <div>
                    <h3>Living History</h3>
                    <p>Discover stories from the past</p>
                </div>
                <span class="card-arrow">↗</span>
            </div>
        </a>

        <a class="museum-card" href="{{ route('about') }}">
            <div class="card-image">
                <img src="{{ asset('images/gallery3.jpg') }}"
                     alt="Historic wooden boat remains"
                     loading="lazy">
                <span class="card-number">03</span>
            </div>
            <div class="card-caption">
                <div>
                    <h3>Maritime Heritage</h3>
                    <p>Traces of journeys and trade</p>
                </div>
                <span class="card-arrow">↗</span>
            </div>
        </a>

        <a class="museum-card" href="{{ route('about') }}">
            <div class="card-image">
                <img src="{{ asset('images/gallery4.jpg') }}"
                     alt="Museum gallery with framed works"
                     loading="lazy">
                <span class="card-number">04</span>
            </div>
            <div class="card-caption">
                <div>
                    <h3>Art & Memory</h3>
                    <p>Objects that help tell our story</p>
                </div>
                <span class="card-arrow">↗</span>
            </div>
        </a>

    </div>
</section>

<section class="story-band">

    <div class="story-image">
        <img src="{{ asset('images/gallery3.jpg') }}"
             alt="Historic wooden boat remains"
             loading="lazy">
    </div>

    <div class="story-content">
        <p class="eyebrow">ROOTED IN HERITAGE</p>

        <h2>
            History is more than the past.<br>
            <em>It is part of who we are.</em>
        </h2>

        <p>
            From cultural traditions to archaeological discoveries,
            heritage helps us understand the people and places that
            shaped our communities.
        </p>

        <a class="text-link" href="{{ route('about') }}">
            Get to know the museum <span>↗</span>
        </a>
    </div>

</section>

<section class="visit-cta">
    <p class="eyebrow">YOUR NEXT DISCOVERY AWAITS</p>

    <h2>Make room for a little <em>wonder.</em></h2>

    <p>Plan a visit and explore the stories behind the exhibits.</p>

    <a class="button button-red" href="{{ route('contact') }}">
        Contact & Visit Information <span aria-hidden="true">↗</span>
    </a>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
