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
        if (!entry.isIntersecting) {
            return;
        }

        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -30px 0px',
});

document.querySelectorAll('.reveal').forEach((element) => {
    observer.observe(element);
});
