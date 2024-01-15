

function addActiveClass() {
    const navLinks = document.querySelectorAll('nav ul li a');
    const sections = document.querySelectorAll('.section-link');
    sections.forEach((section, index) => {
        const rect = section.getBoundingClientRect();

        if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
            navLinks.forEach(navLink => {
                navLink.classList.remove('nav__link--active');
            });
            navLinks[index].classList.add('nav__link--active');
        }
    });
}

window.addEventListener('scroll', addActiveClass);
