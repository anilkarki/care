@extends('layouts.app')
@section('title', 'Contact Us — At Your Home Caregiving of Texas')

@section('content')

{{-- PAGE HERO --}}
<section class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We're here 24/7. Reach out and we'll start your care journey today.</p>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section class="section contact-section">
    <div class="container contact-grid">

        {{-- CONTACT INFO --}}
        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Whether you need immediate care or just have questions, our team is ready to help. We can begin services today!</p>

            <div class="contact-info__items">
                <div class="contact-info__item">
                    <div class="contact-info__icon"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <h4>Call Us 24/7</h4>
                        <a href="tel:4698308414">469-830-8414</a>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <h4>Email Us</h4>
                        <a href="mailto:ayhcofTexas@gmail.com">ayhcofTexas@gmail.com</a>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <h4>Our Office</h4>
                        <address>1301 S Bowen Rd. #140<br>Arlington, Texas 76013</address>
                    </div>
                </div>
                <div class="contact-info__item">
                    <div class="contact-info__icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <h4>Availability</h4>
                        <p>24 hours a day, 7 days a week</p>
                    </div>
                </div>
            </div>

            <div class="contact-info__founder">
                <div class="founder-avatar"><i class="fas fa-user-nurse"></i></div>
                <div>
                    <strong>Sabina Tamang, MSN, FNP</strong>
                    <span>Chief Caregiving Officer</span>
                    <em>"In Service, In Care, With Heartfelt Dedication"</em>
                </div>
            </div>
        </div>

        {{-- CONTACT FORM --}}
        <div class="contact-form-wrap">
            <h2>Send Us a Message</h2>
            <p>Fill out the form below and we'll respond within 24 hours.</p>

            @if(session('success'))
                <div class="alert alert--success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="contact-form" novalidate>
                @csrf

                <div class="form-row">
                    <div class="form-group {{ $errors->has('name') ? 'form-group--error' : '' }}">
                        <label for="name">Full Name <span class="required">*</span></label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Your full name"
                            required
                        />
                        @error('name')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'form-group--error' : '' }}">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="your@email.com"
                            required
                        />
                        @error('email')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group {{ $errors->has('phone') ? 'form-group--error' : '' }}">
                        <label for="phone">Phone Number</label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="(xxx) xxx-xxxx"
                        />
                        @error('phone')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group {{ $errors->has('service') ? 'form-group--error' : '' }}">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service">
                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service...</option>
                            <option value="Personal Care Assistance"       {{ old('service') == 'Personal Care Assistance'       ? 'selected' : '' }}>Personal Care Assistance</option>
                            <option value="Dementia Care"                  {{ old('service') == 'Dementia Care'                  ? 'selected' : '' }}>Dementia Care</option>
                            <option value="Medication Management"          {{ old('service') == 'Medication Management'          ? 'selected' : '' }}>Medication Management</option>
                            <option value="Post Hospital Care"             {{ old('service') == 'Post Hospital Care'             ? 'selected' : '' }}>Post Hospital Care</option>
                            <option value="Chronic Illness Management"     {{ old('service') == 'Chronic Illness Management'     ? 'selected' : '' }}>Chronic Illness Management</option>
                            <option value="Restorative Therapy"            {{ old('service') == 'Restorative Therapy'            ? 'selected' : '' }}>Restorative Therapy</option>
                            <option value="Concierge Services"             {{ old('service') == 'Concierge Services'             ? 'selected' : '' }}>Concierge Services</option>
                            <option value="Long Distance Caregiver Support"{{ old('service') == 'Long Distance Caregiver Support'? 'selected' : '' }}>Long Distance Caregiver Support</option>
                            <option value="Retirement Community Care"      {{ old('service') == 'Retirement Community Care'      ? 'selected' : '' }}>Retirement Community Care</option>
                            <option value="Other"                          {{ old('service') == 'Other'                          ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('service')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group {{ $errors->has('message') ? 'form-group--error' : '' }}">
                    <label for="message">Message <span class="required">*</span></label>
                    <textarea
                        id="message"
                        name="message"
                        rows="5"
                        placeholder="Tell us about your care needs..."
                        required
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <span class="form-error">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn--primary btn--full btn--lg">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>
</section>

{{-- MAP EMBED --}}
<section class="map-section">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.6!2d-97.1!3d32.7!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s1301+S+Bowen+Rd+%23140%2C+Arlington%2C+TX+76013!5e0!3m2!1sen!2sus!4v1620000000000"
        width="100%"
        height="400"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="At Your Home Caregiving of Texas Location">
    </iframe>
</section>

@endsection
