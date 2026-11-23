@extends('layouts.app')

@section('title', 'Contact | National Museum of the Philippines - Butuan')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<section class="contact-page">

    <div class="contact-container">

        <div class="contact-heading">
            <p class="contact-eyebrow">WE'RE HERE TO HELP</p>
            <h1>Contact <span>Us</span></h1>

            <p>
                Have a question about visiting the museum?
                Send us an inquiry using the form below.
            </p>
        </div>

        <div class="contact-layout">

            <!-- Contact information -->
            <aside class="contact-information">
                <h2>Contact Information</h2>

                <p class="contact-info-intro">
                    Find out more about planning a visit and learning
                    about Butuan's cultural heritage.
                </p>

                <div class="contact-info-item">
                    <div class="contact-info-icon" aria-hidden="true">⌖</div>
                    <div>
                        <h3>Location</h3>
                        <p>Butuan City, Agusan del Norte, Philippines</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon" aria-hidden="true">✉</div>
                    <div>
                        <h3>Email</h3>
                        <p>
                            Please check the museum's official channels
                            for verified contact details.
                        </p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon" aria-hidden="true">◷</div>
                    <div>
                        <h3>Visiting hours</h3>
                        <p>
                            Confirm current opening hours before
                            planning your visit.
                        </p>
                    </div>
                </div>

                <div class="contact-note">
                    <strong>Student project</strong>
                    <p>
                        This website is a demonstration and does not
                        represent an official museum contact service.
                    </p>
                </div>
            </aside>

            <!-- Inquiry form -->
            <div class="inquiry-card">

                <h2>Send an Inquiry</h2>

                <p class="inquiry-subtitle">
                    Fill in all required fields marked with an asterisk (*).
                </p>

                <form id="contact-form" novalidate>

                    <div class="contact-form-row">
                        <div class="contact-field">
                            <label for="name">Full Name *</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter your full name"
                                autocomplete="name"
                                required
                            >
                            <small id="name-error" class="field-error"></small>
                        </div>

                        <div class="contact-field">
                            <label for="email">Email Address *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="you@example.com"
                                autocomplete="email"
                                required
                            >
                            <small id="email-error" class="field-error"></small>
                        </div>
                    </div>

                    <div class="contact-field">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select an inquiry subject</option>
                            <option value="visit">Museum visit</option>
                            <option value="school">School or group visit</option>
                            <option value="exhibits">Exhibits and collections</option>
                            <option value="other">Other inquiry</option>
                        </select>
                        <small id="subject-error" class="field-error"></small>
                    </div>

                    <div class="contact-field">
                        <label for="message">Message *</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Write your inquiry here..."
                            required
                        ></textarea>
                        <small id="message-error" class="field-error"></small>
                    </div>

                    <button type="submit" class="send-button">
                        Send Inquiry <span aria-hidden="true">↗</span>
                    </button>

                    <p class="form-disclaimer">
                        Demonstration form only. Messages are not sent
                        or stored by this version.
                    </p>

                    <div
                        id="form-status"
                        class="form-status"
                        role="status"
                        aria-live="polite"
                    ></div>

                </form>
            </div>

        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush
