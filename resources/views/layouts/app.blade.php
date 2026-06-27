<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="At Your Home Caregiving of Texas — Compassionate, personalized in-home care for aging in place and chronic illness management in Arlington, TX." />
    <title>@yield('title', 'At Your Home Caregiving of Texas')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    @stack('styles')
</head>
<body>

    <!-- ===== TOP BAR ===== -->
    <div class="topbar">
        <div class="container topbar__inner">
            <span><i class="fas fa-phone-alt"></i> <a href="tel:4698308414">469-830-8414</a></span>
            <span><i class="fas fa-envelope"></i> <a href="mailto:ayhcofTexas@gmail.com">ayhcofTexas@gmail.com</a></span>
            <span class="topbar__address"><i class="fas fa-map-marker-alt"></i> 1301 S Bowen Rd. #140, Arlington, TX 76013</span>
        </div>
    </div>

    <!-- ===== NAVBAR ===== -->
    <header class="navbar" id="navbar">
        <div class="container navbar__inner">
            <a href="{{ route('home') }}" class="navbar__brand">
                <div class="navbar__logo-icon"><i class="fas fa-home"></i></div>
                <div class="navbar__logo-text">
                    <span class="navbar__logo-main">at your home</span>
                    <span class="navbar__logo-sub">Caregiving</span>
                </div>
            </a>

            <nav class="navbar__nav" id="navMenu">
                <a href="{{ route('home') }}"     class="navbar__link {{ request()->routeIs('home')     ? 'active' : '' }}">Home</a>
                <a href="{{ route('about') }}"    class="navbar__link {{ request()->routeIs('about')    ? 'active' : '' }}">About</a>
                <a href="{{ route('services') }}" class="navbar__link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                <a href="{{ route('contact') }}"  class="navbar__link {{ request()->routeIs('contact')  ? 'active' : '' }}">Contact</a>
                <a href="tel:4698308414" class="btn btn--primary btn--sm">Call Now</a>
            </nav>

            <button class="navbar__toggle" id="navToggle" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>

    <!-- ===== PAGE CONTENT ===== -->
    <main>
        @yield('content')
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <div class="footer__brand">
                    <div class="navbar__logo-icon"><i class="fas fa-home"></i></div>
                    <div class="navbar__logo-text">
                        <span class="navbar__logo-main">at your home</span>
                        <span class="navbar__logo-sub">Caregiving</span>
                    </div>
                </div>
                <p class="footer__tagline">Compassionate, personalized care for aging in place &amp; chronic illness management delivered to the place where you feel most at home.</p>
                <div class="footer__ncpc">
                    <span class="ncpc-badge"><i class="fas fa-certificate"></i> NCPC Member</span>
                </div>
            </div>

            <div class="footer__col">
                <h4 class="footer__heading">Quick Links</h4>
                <ul class="footer__links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('services') }}">Our Services</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__heading">Our Services</h4>
                <ul class="footer__links">
                    <li><a href="{{ route('services') }}">Personal Care Assistance</a></li>
                    <li><a href="{{ route('services') }}">Dementia Care</a></li>
                    <li><a href="{{ route('services') }}">Medication Management</a></li>
                    <li><a href="{{ route('services') }}">Post Hospital Care</a></li>
                    <li><a href="{{ route('services') }}">Restorative Therapy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__heading">Contact Us</h4>
                <ul class="footer__contact-list">
                    <li><i class="fas fa-phone-alt"></i><a href="tel:4698308414">469-830-8414</a></li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:ayhcofTexas@gmail.com">ayhcofTexas@gmail.com</a></li>
                    <li><i class="fas fa-map-marker-alt"></i>1301 S Bowen Rd. #140,<br>Arlington, Texas 76013</li>
                    <li><i class="fas fa-clock"></i>Available 24/7</li>
                </ul>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container footer__bottom-inner">
                <p>&copy; {{ date('Y') }} At Your Home Caregiving of Texas. All rights reserved.</p>
                <p>Led by <strong>Sabina Tamang, MSN, FNP</strong> — Chief Caregiving Officer</p>
            </div>
        </div>
    </footer>

    <!-- App JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
