const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');

menuToggle?.addEventListener('click', () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!isOpen));
    mobileMenu?.classList.toggle('hidden');
});

mobileMenu?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuToggle?.setAttribute('aria-expanded', 'false');
    });
});

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.12,
    rootMargin: '0px 0px -40px 0px',
});

document.querySelectorAll('.reveal').forEach((element, index) => {
    element.style.transitionDelay = index < 7 ? `${index * 70}ms` : '0ms';
    observer.observe(element);
});
