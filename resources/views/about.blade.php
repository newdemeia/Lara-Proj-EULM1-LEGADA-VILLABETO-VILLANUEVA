
@extends('layouts.app')

@section('title', 'About | National Museum of the Philippines — Butuan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

{{-- ABOUT HERO --}}
<section class="about-hero">
    <div class="about-hero-image"></div>
    <div class="about-hero-shade"></div>

    <div class="about-hero-content">
        <p class="eyebrow">
            <span></span>
            OUR STORY · OUR HERITAGE
        </p>

        <h1>
            Preserving the past,
            <em>inspiring the future.</em>
        </h1>

        <p>
            Discover the history, culture, and archaeological
            heritage that make Butuan an important part of
            the Filipino story.
        </p>

        <a href="#our-story" class="button button-light">
            Discover Our Story <span>↓</span>
        </a>
    </div>

    <div class="about-hero-caption">
        BUTUAN CITY · AGUSAN DEL NORTE
    </div>
</section>

{{-- INTRO STRIP --}}
<div class="about-intro-strip">
    <p>
        <span class="intro-mark">✳</span>
        Every artifact carries a story worth remembering.
    </p>

    <span class="intro-location">
        HISTORY · CULTURE · HERITAGE
    </span>
</div>

{{-- OUR STORY --}}
<section class="section about-story" id="our-story">

    <div class="section-heading">
        <div>
            <p class="eyebrow">WHY HERITAGE MATTERS</p>
            <h2>
                Keeping the past
                <em>alive.</em>
            </h2>
        </div>

        <p class="section-lede">
            Museums connect generations through the preservation
            of history, culture, and meaningful discoveries.
        </p>
    </div>

    <div class="story-layout">

        <div class="story-image">
            <img
                src="{{ asset('images/gallery3.jpg') }}"
                alt="Historic balangay boat remains"
                loading="lazy"
            >
            <span class="image-caption">
                A glimpse into Butuan's maritime heritage
            </span>
        </div>

        <div class="story-text">

            <p>
                Butuan is recognized for its rich archaeological
                and cultural heritage, particularly the discovery
                of the ancient balangay boats, which reflect the
                region's history of seafaring and trade.
            </p>

            <div id="background-extra" class="story-extra" hidden>
                <p>
                    Through the preservation and presentation
                    of historical objects, museums help visitors
                    understand the traditions, achievements, and
                    everyday lives of earlier communities.
                </p>

                <p>
                    This student-created website concept aims to
                    introduce visitors to museum-related
                    information and encourage a deeper
                    appreciation of Butuan's cultural heritage.
                </p>
            </div>

            <button
                id="read-more-button"
                class="text-link"
                type="button"
                aria-expanded="false"
                aria-controls="background-extra"
            >
                Read Our Story <span>↓</span>
            </button>

            <div class="story-divider"></div>

            <div class="story-note">
                <span class="note-symbol">✳</span>
                <p>
                    "Understanding where we came from helps
                    us appreciate who we are today."
                </p>
            </div>

        </div>
    </div>
</section>

{{-- GUIDING PRINCIPLES --}}
<section class="principles-section">

    <div class="section principles-inner">

        <div class="center-heading">
            <p class="eyebrow">OUR GUIDING PRINCIPLES</p>
            <h2>
                Preserve. <em>Share. Inspire.</em>
            </h2>
            <p>
                Three simple ideas shape our appreciation
                of history and cultural heritage.
            </p>
        </div>

        <div class="principles-grid">

            <article class="principle-card">
                <span class="principle-number">01</span>

                <div class="principle-icon">✳</div>

                <h3>Preserve</h3>

                <p>
                    Protecting historical objects, traditions,
                    and cultural knowledge for future generations.
                </p>

                <span class="principle-bottom">
                    KEEPING HISTORY ALIVE
                </span>
            </article>

            <article class="principle-card featured">
                <span class="principle-number">02</span>

                <div class="principle-icon">◇</div>

                <h3>Share</h3>

                <p>
                    Making stories, discoveries, and knowledge
                    accessible to visitors and communities.
                </p>

                <span class="principle-bottom">
                    CONNECTING GENERATIONS
                </span>
            </article>

            <article class="principle-card">
                <span class="principle-number">03</span>

                <div class="principle-icon">✧</div>

                <h3>Inspire</h3>

                <p>
                    Encouraging curiosity, learning, and
                    appreciation for our shared heritage.
                </p>

                <span class="principle-bottom">
                    CREATING NEW PERSPECTIVES
                </span>
            </article>

        </div>
    </div>
</section>

{{-- MISSION AND VISION --}}
<section class="section mission-section">

    <div class="mission-layout">

        <div class="mission-image">
            <img
                src="{{ asset('images/gallery1.jpg') }}"
                alt="Cultural exhibit at the museum"
                loading="lazy"
            >

            <div class="mission-image-label">
                <span>01 / HERITAGE</span>
                A journey of discovery
            </div>
        </div>

        <div class="mission-content">

            <p class="eyebrow">OUR PURPOSE & DIRECTION</p>

            <h2>
                Every exhibit opens a
                <em>new perspective.</em>
            </h2>

            <p class="mission-intro">
                Every collection offers an opportunity to
                discover something meaningful. From archaeology
                to cultural traditions, history invites us to
                look closer and learn more.
            </p>

            <div class="mission-item">
                <span class="mission-index">01</span>

                <div>
                    <h3>Our Mission</h3>
                    <p>
                        To preserve and promote Butuan's
                        archaeological and cultural heritage
                        through meaningful learning and
                        accessible museum information.
                    </p>
                </div>
            </div>

            <div class="mission-item">
                <span class="mission-index">02</span>

                <div>
                    <h3>Our Vision</h3>
                    <p>
                        To encourage greater appreciation of
                        Butuan's heritage and make museum
                        information more accessible to
                        communities in Caraga and beyond.
                    </p>
                </div>
            </div>

            <a href="{{ route('contact') }}" class="text-link">
                Plan Your Visit <span>↗</span>
            </a>

        </div>
    </div>
</section>

{{-- TEAM --}}
<section class="team-section">

    <div class="section">

        <div class="section-heading team-heading">
            <div>
                <p class="eyebrow">THE PEOPLE BEHIND THE PROJECT</p>
                <h2>
                    Meet Our <em>Team.</em>
                </h2>
            </div>

            <p class="section-lede">
                The people working together to make
                discovering our heritage a more welcoming
                experience.
            </p>
        </div>

        <div class="team-grid">

            <article class="team-card">
                <div class="team-avatar">D</div>
                <span class="team-number">01 / TEAM</span>
                <h3>Dimelyn Via Villabeto</h3>
                <p>Museum Director</p>
            </article>

            <article class="team-card">
                <div class="team-avatar">J</div>
                <span class="team-number">02 / TEAM</span>
                <h3>Joshua Villanueva</h3>
                <p>Head Tour Guide</p>
            </article>

            <article class="team-card">
                <div class="team-avatar">K</div>
                <span class="team-number">03 / TEAM</span>
                <h3>Khizziah Legada</h3>
                <p>Reservations Officer</p>
            </article>

        </div>

    </div>
</section>

{{-- FINAL CTA --}}
<section class="about-cta">

    <p class="eyebrow">YOUR NEXT DISCOVERY AWAITS</p>

    <h2>
        History is waiting
        <em>to be explored.</em>
    </h2>

    <p>
        Take a closer look at the stories that shaped Butuan.
    </p>

    <a href="{{ route('contact') }}" class="button button-red">
        Contact & Visit Information <span>↗</span>
    </a>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush
