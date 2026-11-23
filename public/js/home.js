document.addEventListener('DOMContentLoaded', function () {
    const slides = Array.from(
        document.querySelectorAll('.hero-slide')
    );

    const dots = Array.from(
        document.querySelectorAll('.hero-dot')
    );

    const previous = document.querySelector('.hero-prev');
    const next = document.querySelector('.hero-next');
    const currentLabel = document.querySelector('.hero-current');
    const hero = document.querySelector('.hero');

    if (slides.length === 0) {
        return;
    }

    let current = 0;
    let timer = null;

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    function showSlide(index) {
        current = (index + slides.length) % slides.length;

        slides.forEach(function (slide, i) {
            slide.classList.toggle('active', i === current);
            slide.setAttribute('aria-hidden', String(i !== current));
        });

        dots.forEach(function (dot, i) {
            dot.classList.toggle('active', i === current);
            dot.setAttribute('aria-pressed', String(i === current));
        });

        if (currentLabel) {
            currentLabel.textContent = String(current + 1).padStart(2, '0');
        }
    }

    function stopTimer() {
        if (timer) {
            window.clearInterval(timer);
            timer = null;
        }
    }

    function startTimer() {
        stopTimer();

        if (!reducedMotion && slides.length > 1) {
            timer = window.setInterval(function () {
                showSlide(current + 1);
            }, 6000);
        }
    }

    if (previous) {
        previous.addEventListener('click', function () {
            showSlide(current - 1);
            startTimer();
        });
    }

    if (next) {
        next.addEventListener('click', function () {
            showSlide(current + 1);
            startTimer();
        });
    }

    dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
            showSlide(index);
            startTimer();
        });
    });

    if (hero) {
        hero.addEventListener('mouseenter', stopTimer);
        hero.addEventListener('mouseleave', startTimer);
        hero.addEventListener('focusin', stopTimer);
        hero.addEventListener('focusout', startTimer);
    }

    showSlide(0);
    startTimer();
});
