@extends('layouts.app')
@section('title', 'About Us — At Your Home Caregiving of Texas')

@section('content')

<section class="page-hero">
    <div class="container">
        <h1>About Us</h1>
        <p>Learn about our mission, our founder, and our commitment to compassionate care.</p>
    </div>
</section>

<section class="section">
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
            <span class="section__eyebrow">Our Founder</span>
            <h2 class="section__title">Sabina Tamang, MSN, FNP</h2>
            <h3 class="about__subtitle">Chief Caregiving Officer</h3>
            <p>It is with great pleasure that I welcome you to At Your Home Caregiving of Texas. As the Chief Caregiving Officer, it is my honor to ensure that you receive the highest standard of care, tailored to your unique needs and preferences.</p>
            <p>At Your Home Caregiving was founded from my deep-seated passion for helping others, combined with my extensive education as a Family Nurse Practitioner. Having witnessed the challenges that many older adults face in accessing personalized and compassionate care, I made it my mission to bridge these gaps.</p>
            <p>Our goal is to provide care that respects your dignity, honors your wishes, and supports your well-being, no matter the circumstances. You are at the heart of everything we do.</p>
            <blockquote class="about-intro__quote">
                "In Service, In Care, With Heartfelt Dedication"
                <cite>— Sabina Tamang, MSN, FNP</cite>
            </blockquote>
        </div>
    </div>
</section>

<section class="section section--gray">
    <div class="container">
        <div class="section__header">
            <span class="section__eyebrow">Our Values</span>
            <h2 class="section__title">Excellence, Integrity &amp; Compassion</h2>
        </div>
        <div class="cards-grid cards-grid--3">
            <div class="card card--value">
                <div class="card__icon"><i class="fas fa-star"></i></div>
                <h3 class="card__title">Excellence</h3>
                <p class="card__desc">We are committed to excellence in every aspect of care we deliver, ensuring the highest standards are maintained at all times.</p>
            </div>
            <div class="card card--value">
                <div class="card__icon"><i class="fas fa-handshake"></i></div>
                <h3 class="card__title">Integrity</h3>
                <p class="card__desc">We operate with full transparency — from background checks to pricing — so you always know exactly what to expect.</p>
            </div>
            <div class="card card--value">
                <div class="card__icon"><i class="fas fa-heart"></i></div>
                <h3 class="card__title">Compassion</h3>
                <p class="card__desc">Every interaction is guided by genuine compassion and respect for the dignity and individuality of each person we serve.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section__header">
            <span class="section__eyebrow">Our Commitment</span>
            <h2 class="section__title">You Can Count On Us For</h2>
        </div>
        <div class="count-on-grid">
            <div class="count-on-item">
                <i class="fas fa-clock"></i>
                <div>
                    <h4>24/7 Availability</h4>
                    <p>We are here for you every hour of every day, ensuring that whenever you need us, we're ready to assist.</p>
                </div>
            </div>
            <div class="count-on-item">
                <i class="fas fa-user-cog"></i>
                <div>
                    <h4>Personalized Solutions</h4>
                    <p>During our initial conversation, we'll explore solutions tailored to your unique situation.</p>
                </div>
            </div>
            <div class="count-on-item">
                <i class="fas fa-bolt"></i>
                <div>
                    <h4>Immediate Care</h4>
                    <p>If you need care now, call us at 469-830-8414, and we'll start caring for your loved one today.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container cta-banner__inner">
        <div class="cta-banner__text">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today for a free care assessment.</p>
        </div>
        <div class="cta-banner__actions">
            <a href="tel:4698308414" class="btn btn--white btn--lg"><i class="fas fa-phone-alt"></i> 469-830-8414</a>
            <a href="{{ route('contact') }}" class="btn btn--outline-white btn--lg"><i class="fas fa-envelope"></i> Contact Us</a>
        </div>
    </div>
</section>

@endsection
