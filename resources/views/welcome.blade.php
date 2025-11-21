<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEOTools generates all meta tags --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! JsonLd::generate() !!}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<!-- Navigation -->
<nav class="nav">
    <div class="logo">CLUTCH <span>GOLF</span></div>
    <ul class="nav-links">
        <li><a href="#experience">Experience</a></li>
        <li><a href="#simulators">Simulators</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#events">Events</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    <a href="#book" class="nav-cta">Book Now</a>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <p class="hero-tagline">Premium Indoor Golf Experience</p>
        <h1>Where Every Swing <span>Matters</span></h1>
        <p class="hero-description">
            State-of-the-art simulators. Craft cocktails. Elevated atmosphere.
            Experience golf reimagined at Clutch Golf.
        </p>
        <div class="hero-buttons">
            <a href="#book" class="btn-primary">Reserve Your Bay</a>
            <a href="#experience" class="btn-secondary">Explore</a>
        </div>
    </div>
    <div class="scroll-indicator">Scroll</div>
</section>

<!-- Experience Section -->
<section class="about" id="experience">
    <div class="container">
        <div class="section-header">
            <p class="section-label">The Experience</p>
            <h2 class="section-title">Golf, Elevated</h2>
            <p class="section-description">
                More than a simulator. A destination where technology meets hospitality.
            </p>
        </div>
        <div class="about-grid">
            <div class="about-card">
                <svg class="about-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <h3>Tour-Level Simulators</h3>
                <p>TrackMan technology delivers unmatched accuracy. Play 100+ world-renowned courses with precision data on every shot.</p>
            </div>
            <div class="about-card">
                <svg class="about-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                </svg>
                <h3>Curated Menu</h3>
                <p>Craft cocktails, premium spirits, and elevated bites. Our kitchen delivers shareable plates designed for your round.</p>
            </div>
            <div class="about-card">
                <svg class="about-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <h3>Private Bays</h3>
                <p>Semi-private spaces for groups of all sizes. Perfect for date nights, team outings, or friendly competition.</p>
            </div>
        </div>
    </div>
</section>

<!-- Add remaining sections here... -->
<!-- Simulators, Menu, Events, Booking, Contact, Footer -->

<!-- Booking Section -->
<section class="booking" id="book">
    <div class="container">
        <div class="section-header">
            <p class="section-label">Reserve</p>
            <h2 class="section-title">Book Your Bay</h2>
        </div>
        <div class="booking-widget">
            <p>Select your date, time, and bay to reserve your experience.</p>

            <!-- YOUR BOOKING WIDGET GOES HERE -->
            <div id="booking-embed">
                {{-- Example: SimplyBook embed --}}
                {{-- <script src="//widget.simplybook.me/v2/widget/widget.js"></script> --}}
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-logo">CLUTCH <span>GOLF</span></div>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms</a>
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
        </div>
        <p class="footer-copyright">&copy; {{ date('Y') }} Clutch Golf. All rights reserved.</p>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
