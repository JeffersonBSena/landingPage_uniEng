import './bootstrap';

// Navbar background change on scroll
const navbar = document.getElementById('navbar');
if (navbar) {
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY > 50;
        navbar.classList.toggle('bg-white', scrolled);
        navbar.classList.toggle('shadow-md', scrolled);
        navbar.classList.toggle('bg-transparent', !scrolled);

        // Change text colors when scrolled
        document.querySelectorAll('.navbar-brand').forEach(el => {
            el.classList.toggle('text-white', !scrolled);
            el.classList.toggle('text-gray-900', scrolled);
        });
        document.querySelectorAll('.navbar-link').forEach(el => {
            el.classList.toggle('text-white/90', !scrolled);
            el.classList.toggle('hover:text-white', !scrolled);
            el.classList.toggle('text-gray-700', scrolled);
            el.classList.toggle('hover:text-primary-600', scrolled);
        });

        // Swap logos: light version on dark bg, dark version on light bg
        document.querySelectorAll('.logo-light').forEach(el => {
            el.classList.toggle('hidden', scrolled);
        });
        document.querySelectorAll('.logo-dark').forEach(el => {
            el.classList.toggle('hidden', !scrolled);
        });
    });
}

// Mobile menu toggle
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking a link
    mobileMenu.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });
}

// Smooth scroll for anchor links (offset for fixed navbar)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#') return;

        const target = document.querySelector(href);
        if (target) {
            e.preventDefault();
            const offset = 80;
            const top = target.getBoundingClientRect().top + window.scrollY - offset;
            window.scrollTo({ top, behavior: 'smooth' });
        }
    });
});
