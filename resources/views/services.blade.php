@extends('layouts.app')
@section('title', 'Our Services — At Your Home Caregiving of Texas')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container">
        <h1>Our Services</h1>
        <p>Comprehensive in-home care tailored to your unique needs and preferences.</p>
    </div>
</section>

{{-- IN-HOME SERVICES --}}
<section class="section">
    <div class="container">
        <div class="section__header">
            <span class="section__eyebrow">Supportive Living Department</span>
            <h2 class="section__title">In-Home Services</h2>
            <p class="section__subtitle">
                We offer many services to ease the stress of caregiving and to give every older adult
                the opportunity to live life on their own terms — wherever they choose to call "home" —
                regardless of any life-limiting conditions.
            </p>
        </div>

        <div class="services-list-grid">
            @foreach($inHomeServices as $service)
            <div class="services-list-item">
                <i class="fas fa-check-circle"></i>
                <span>{{ $service }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- RETIREMENT COMMUNITY SERVICES --}}
<section class="section section--gray">
    <div class="container">
        <div class="section__header">
            <span class="section__eyebrow">Retirement Communities</span>
            <h2 class="section__title">Supportive Living Services Inside Retirement Communities</h2>
            <p class="section__subtitle">
                We extend our compassionate care inside assisted living and retirement communities,
                ensuring continuity and quality no matter where you reside.
            </p>
        </div>

        <div class="retirement-cards">
            @foreach($retirementServices as $i => $service)
            <div class="retirement-card">
                <div class="retirement-card__num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                <p>{{ $service }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- HOW IT WORKS --}}
<section class="section">
    <div class="container">
        <div class="section__header">
            <span class="section__eyebrow">Our Process</span>
            <h2 class="section__title">How It Works</h2>
            <p class="section__subtitle">Getting started is simple. We can begin services today.</p>
        </div>

        <div class="how-it-works">
            <div class="how-step">
                <div class="how-step__icon"><i class="fas fa-phone-alt"></i></div>
                <div class="how-step__connector"></div>
                <h4>Step 1</h4>
                <p>Call us at <a href="tel:4698308414">469-830-8414</a> or fill out our contact form.</p>
            </div>
            <div class="how-step">
                <div class="how-step__icon"><i class="fas fa-clipboard-check"></i></div>
                <div class="how-step__connector"></div>
                <h4>Step 2</h4>
                <p>A nurse specialist conducts a comprehensive free care assessment.</p>
            </div>
            <div class="how-step">
                <div class="how-step__icon"><i class="fas fa-file-medical-alt"></i></div>
                <div class="how-step__connector"></div>
                <h4>Step 3</h4>
                <p>We develop a customized care plan with your family and healthcare team.</p>
            </div>
            <div class="how-step">
                <div class="how-step__icon"><i class="fas fa-heart"></i></div>
                <h4>Step 4</h4>
                <p>Care begins immediately — compassionate, personalized, and right at home.</p>
            </div>
        </div>
    </div>
</section>

{{-- WHY CHOOSE US --}}
<section class="section section--green why-choose">
    <div class="container">
        <div class="section__header section__header--white">
            <span class="section__eyebrow section__eyebrow--light">Why Choose Us</span>
            <h2 class="section__title">5 Reasons Clients Choose At Your Home Caregiving</h2>
        </div>
        <div class="cards-grid cards-grid--5">
            @foreach([
                ['icon'=>'fas fa-clock',           'title'=>'No Minimum Hours',            'desc'=>'Complete flexibility — select only the hours you need.'],
                ['icon'=>'fas fa-dollar-sign',      'title'=>'Customizable Pricing',        'desc'=>'Choose your hourly rate and payment plan seamlessly.'],
                ['icon'=>'fas fa-user-check',       'title'=>'Caregiver Selection',         'desc'=>'Choose your preferred caregiver for compatibility and trust.'],
                ['icon'=>'fas fa-shield-alt',       'title'=>'Transparent Screening',       'desc'=>'Full access to background checks, drug screenings, and credentials.'],
                ['icon'=>'fas fa-clipboard-list',   'title'=>'Collaborative Care Planning', 'desc'=>'Actively participate in your care plan, coordinated with your providers.'],
            ] as $i => $reason)
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

{{-- CTA BANNER --}}
<section class="cta-banner">
    <div class="container cta-banner__inner">
        <div class="cta-banner__text">
            <h2>We Can Begin Services Today!</h2>
            <p>Call us now — 24/7 availability, no minimum hours required.</p>
        </div>
        <div class="cta-banner__actions">
            <a href="tel:4698308414" class="btn btn--white btn--lg">
                <i class="fas fa-phone-alt"></i> 469-830-8414
            </a>
            <a href="{{ route('contact') }}" class="btn btn--outline-white btn--lg">
                <i class="fas fa-calendar-check"></i> Free Assessment
            </a>
        </div>
    </div>
</section>

@endsection
