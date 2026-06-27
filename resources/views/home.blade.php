@extends('layouts.app')
@section('title', 'At Your Home Caregiving of Texas — Compassionate In-Home Care')

@section('content')

{{-- ===== HERO ===== --}}
<section class="hero">
    <div class="hero__overlay"></div>
    <div class="container hero__content">
        <span class="hero__badge"><i class="fas fa-certificate"></i> NCPC Member</span>
        <h1 class="hero__title">
            Compassionate, Personalized Care<br>
            <span class="text-accent">In the Comfort of Your Home</span>
        </h1>
        <p class="hero__subtitle">
            Aging in place &amp; chronic illness management delivered to the place where you feel most at home — Arlington, Texas and surrounding areas.
        </p>
        <div class="hero__actions">
            <a href="tel:4698308414" class="btn btn--primary btn--lg">
                <i class="fas fa-phone-alt"></i> Call Now: 469-830-8414
            </a>
            <a href="{{ route('contact') }}" class="btn btn--outline-white btn--lg">
                <i class="fas fa-calendar-check"></i> Free Assessment
            </a>
        </div>
        <div class="hero__stats">
            <div class="hero__stat"><span>24/7</span><small>Availability</small></div>
            <div class="hero__stat"><span>0</span><small>Minimum Hours</small></div>
            <div class="hero__stat"><span>100%</span><small>Personalized</small></div>
        </div>
    </div>
</section>

{{-- ===== TRUST BAR ===== --}}
<section class="trust-bar">
    <div class="container trust-bar__inner">
        <div class="trust-bar__item"><i class="fas fa-check-circle"></i> No Minimum Hours</div>
        <div class="trust-bar__item"><i class="fas fa-check-circle"></i> Customizable Pricing</div>
        <div class="trust-bar__item"><i class="fas fa-check-circle"></i> Choose Your Caregiver</div>
        <div class="trust-bar__item"><i class="fas fa-check-circle"></i> Transparent Screening</div>
        <div class="trust-bar__item"><i class="fas fa-check-circle"></i> 24/7 Support</div>
    </div>
</section>

{{-- ===== ABOUT INTRO ===== --}}
<section class="section about-intro">
    <div class="container about-intro__grid">
        <div class="about-intro__image">
            <div class="about-intro__img-frame">
                <div class="about-intro__img-placeholder">
                    <i class="fas fa-user-nurse"></i>
                </div>
                <div class="about-intro__badge-float">
                    <i class="fas fa-award"></i>
                    <span>MSN, FNP<br>Certified</span>
                </div>
            </div>
        </div>
        <div class="about-intro__text">
            <span class="section__eyebrow">About Our Founder</span>
            <h2 class="section__title">Led by a Family Nurse Practitioner</h2>
            <p>At Your Home Caregiving of Texas was founded by <strong>Sabina Tamang, MSN, FNP</strong> from a deep-seated passion for helping others, combined with extensive education as a Family Nurse Practitioner.</p>
            <p>Having witnessed the challenges that many older adults face in accessing personalized and compassionate care, Sabina made it her mission to bridge these gaps — delivering care that respects your dignity, honors your wishes, and supports your well-being.</p>
            <blockquote class="about-intro__quote">
                "You are at the heart of everything we do."
                <cite>— Sabina Tamang, MSN, FNP</cite>
            </blockquote>
            <a href="{{ route('about') }}" class="btn btn--primary">Learn More About Us</a>
        </div>
    </div>
</section>

{{-- ===== SERVICES PREVIEW ===== --}}
<section class="section section--gray services-preview">
    <div class="container">
        <div class="section__header">
            <span class="section__eyebrow">What We Offer</span>
            <h2 class="section__title">Comprehensive In-Home Services</h2>
            <p class="section__subtitle">Tailored care solutions designed around your unique needs and preferences.</p>
        </div>
        <div class="cards-grid cards-grid--3">
            @foreach($services as $service)
            <div class="card card--service">
                <div class="card__icon"><i class="{{ $service['icon'] }}"></i></div>
                <h3 class="card__title">{{ $service['title'] }}</h3>
                <p class="card__desc">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="section__cta">
            <a href="{{ route('services') }}" class="btn btn--primary">View All Services</a>
        </div>
    </div>
</section>

{{-- ===== WHO WE SERVE ===== --}}
<section class="section who-we-serve">
    <div class="container">
        <div class="section__header">
            <span class="section__eyebrow">Who We Serve</span>
            <h2 class="section__title">Care for Every Individual's Journey</h2>
            <p class="section__subtitle">Our mission is rooted in delivering compassionate, personalized care that maintains independence and dignity.</p>
        </div>
        <div class="cards-grid cards-grid--3">
            @foreach($whoWeServe as $client)
            <div class="card card--serve">
                <div class="card__icon card__icon--green"><i class="{{ $client['icon'] }}"></i></div>
                <h3 class="card__title">{{ $client['title'] }}</h3>
                <p class="card__desc">{{ $client['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== WHY CHOOSE US ===== --}}
<section class="section section--green why-choose">
    <div class="container">
        <div class="section__header section__header--white">
            <span class="section__eyebrow section__eyebrow--light">Why Choose Us</span>
            <h2 class="section__title">5 Reasons Families Trust Us</h2>
        </div>
        <div class="cards-grid cards-grid--5">
            @foreach($whyChooseUs as $i => $reason)
            <div class="card card--why">
                <div class="card__number">{{ $i + 1 }}</div>
                <div class="card__icon card__icon--white"><i class="{{ $reason['icon'] }}"></i></div>
                <h3 class="card__title">{{ $reason['title'] }}</h3>
                <p class="card__desc">{{ $reason['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== WHAT TO EXPECT ===== --}}
<section class="section what-to-expect">
    <div class="container what-to-expect__grid">
        <div class="what-to-expect__text">
            <span class="section__eyebrow">Our Process</span>
            <h2 class="section__title">What to Expect</h2>
            <p>We understand that selecting the right care for your loved one is a critical decision. Our process begins with a comprehensive care assessment conducted by a nurse specialized in chronic illness management.</p>
            <div class="steps">
                <div class="step">
                    <div class="step__num">1</div>
                    <div class="step__content">
                        <h4>Free Care Assessment</h4>
                        <p>A comprehensive assessment by a nurse specialized in chronic illness management.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step__num">2</div>
                    <div class="step__content">
                        <h4>Customized Care Plan</h4>
                        <p>Developed in collaboration with your family and healthcare team.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step__num">3</div>
                    <div class="step__content">
                        <h4>Begin Services Today</h4>
                        <p>Once you're satisfied with your proposed care plan, we can begin immediately.</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="btn btn--primary">Schedule Free Assessment</a>
        </div>
        <div class="what-to-expect__image">
            <div class="what-to-expect__img-placeholder">
                <i class="fas fa-clipboard-check"></i>
                <span>Personalized Care Planning</span>
            </div>
        </div>
    </div>
</section>

{{-- ===== CTA BANNER ===== --}}
<section class="cta-banner">
    <div class="container cta-banner__inner">
        <div class="cta-banner__text">
            <h2>We Can Begin Services Today!</h2>
            <p>Call us now and let's start your personalized care journey.</p>
        </div>
        <div class="cta-banner__actions">
            <a href="tel:4698308414" class="btn btn--white btn--lg">
                <i class="fas fa-phone-alt"></i> 469-830-8414
            </a>
            <a href="{{ route('contact') }}" class="btn btn--outline-white btn--lg">
                <i class="fas fa-envelope"></i> Send a Message
            </a>
        </div>
    </div>
</section>

@endsection
