/* ============================================================
   AT YOUR HOME CAREGIVING OF TEXAS — MAIN JAVASCRIPT
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

    // ---- NAVBAR TOGGLE (Mobile) ----
    const navToggle = document.getElementById('navToggle');
    const navMenu   = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function () {
            navMenu.classList.toggle('open');
            navToggle.classList.toggle('open');
            navToggle.setAttribute(
                'aria-expanded',
                navMenu.classList.contains('open') ? 'true' : 'false'
            );
        });

        // Close menu when a link is clicked
        navMenu.querySelectorAll('.navbar__link').forEach(function (link) {
            link.addEventListener('click', function () {
                navMenu.classList.remove('open');
                navToggle.classList.remove('open');
            });
        });

        // Close menu on outside click
        document.addEventListener('click', function (e) {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('open');
                navToggle.classList.remove('open');
            }
        });
    }

    // ---- NAVBAR SCROLL EFFECT ----
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', function () {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        }, { passive: true });
    }

    // ---- SCROLL REVEAL (Intersection Observer) ----
    const fadeEls = document.querySelectorAll(
        '.card, .step, .services-list-item, .retirement-card, .count-on-item, ' +
        '.how-step, .contact-info__item, .section__header'
    );

    if ('IntersectionObserver' in window && fadeEls.length) {
        fadeEls.forEach(function (el) {
            el.classList.add('fade-in-up');
        });

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        fadeEls.forEach(function (el) { observer.observe(el); });
    }

    // ---- SMOOTH SCROLL for anchor links ----
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ---- PHONE NUMBER FORMATTING ----
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function () {
            let val = this.value.replace(/\D/g, '').substring(0, 10);
            if (val.length >= 6) {
                val = '(' + val.substring(0,3) + ') ' + val.substring(3,6) + '-' + val.substring(6);
            } else if (val.length >= 3) {
                val = '(' + val.substring(0,3) + ') ' + val.substring(3);
            }
            this.value = val;
        });
    }

    // ---- CONTACT FORM CLIENT-SIDE VALIDATION ----
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            let valid = true;

            // Clear previous errors
            contactForm.querySelectorAll('.form-group--error').forEach(function (g) {
                g.classList.remove('form-group--error');
            });
            contactForm.querySelectorAll('.form-error.js-error').forEach(function (el) {
                el.remove();
            });

            // Validate required fields
            contactForm.querySelectorAll('[required]').forEach(function (field) {
                if (!field.value.trim()) {
                    valid = false;
                    const group = field.closest('.form-group');
                    group.classList.add('form-group--error');
                    const err = document.createElement('span');
                    err.className = 'form-error js-error';
                    err.textContent = 'This field is required.';
                    group.appendChild(err);
                }
            });

            // Validate email format
            const emailField = contactForm.querySelector('#email');
            if (emailField && emailField.value.trim()) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailField.value.trim())) {
                    valid = false;
                    const group = emailField.closest('.form-group');
                    group.classList.add('form-group--error');
                    const err = document.createElement('span');
                    err.className = 'form-error js-error';
                    err.textContent = 'Please enter a valid email address.';
                    group.appendChild(err);
                }
            }

            if (!valid) {
                e.preventDefault();
                // Scroll to first error
                const firstError = contactForm.querySelector('.form-group--error');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });
    }

    // ---- HERO STATS COUNTER ANIMATION ----
    const statEls = document.querySelectorAll('.hero__stat span');
    if (statEls.length) {
        const animateCounter = function (el) {
            const target = el.textContent.trim();
            if (target === '24/7' || target === '100%' || target === '0') return;
            const end = parseInt(target.replace(/\D/g, ''), 10);
            if (isNaN(end)) return;
            let current = 0;
            const step = Math.ceil(end / 40);
            const timer = setInterval(function () {
                current = Math.min(current + step, end);
                el.textContent = current + (target.includes('+') ? '+' : '');
                if (current >= end) clearInterval(timer);
            }, 30);
        };

        const statsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statEls.forEach(function (el) { statsObserver.observe(el); });
    }

    // ---- ACTIVE NAV LINK HIGHLIGHT on scroll ----
    const sections = document.querySelectorAll('section[id]');
    if (sections.length) {
        const navLinks = document.querySelectorAll('.navbar__link[href*="#"]');
        window.addEventListener('scroll', function () {
            let current = '';
            sections.forEach(function (section) {
                if (window.scrollY >= section.offsetTop - 100) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(function (link) {
                link.classList.toggle('active', link.getAttribute('href').includes(current));
            });
        }, { passive: true });
    }

});
