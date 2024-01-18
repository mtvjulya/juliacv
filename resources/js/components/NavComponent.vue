<template>
    <nav class="nav nav--closed">
        <button class="nav__toggle" type="button" aria-expanded="false" :aria-label="getMenuLabel()"></button>
        <ul class="clear-list nav__list">
            <li class="nav__item nav__item--en nav__item--active"><a class="nav__link nav__link--en nav__link--active"
                                                                     href="#home">{{
                    currentLang === 'en' ? 'Home' : 'Главная'
                }}</a>
            </li>
            <li class="nav__item nav__item--en"><a class="nav__link nav__link--en"
                                                   href="#about">{{ currentLang === 'en' ? 'About' : 'Обо мне' }}</a>
            </li>
            <li class="nav__item nav__item--en"><a class="nav__link nav__link--en"
                                                   href="#projects">{{
                    currentLang === 'en' ? 'Projects' : 'Проекты'
                }}</a>
            </li>
            <li class="nav__item nav__item--en"><a class="nav__link nav__link--en"
                                                   href="#experience">{{
                    currentLang === 'en' ? 'Experience' : 'Опыт'
                }}</a>
            </li>
            <li class="nav__item nav__item--en"><a class="nav__link nav__link--en"
                                                   href="#contact">{{
                    currentLang === 'en' ? 'Contact' : 'Контакты'
                }}</a>
            </li>
        </ul>


    </nav>

</template>

<script>


export default {

    name: "NavComponent",

    data() {
        return {
            currentLang: 'en'
        };
    },
    methods: {
        getMenuLabel() {
            return this.currentLang === 'en' ? 'Menu' : 'Меню';
        }
    },
    mounted() {
        const nav = document.querySelector('.nav');
        const langButtons = document.querySelectorAll('[name="lang"]');
        langButtons.forEach(langButton => {
            langButton.addEventListener('click', e => {
                //  e.preventDefault();
                const lang = e.target.value;
                // Обновляем значение языка в компоненте
                this.currentLang = lang;
                // Обновляем значение атрибута lang в элементе <html>
                document.documentElement.setAttribute('lang', lang);
            });
        });
        const navItems = document.querySelectorAll('.nav__item--en');
        const navLinks = document.querySelectorAll('.nav__link--en');

        const navToggle = document.querySelector('.nav__toggle');
        navToggle.addEventListener('click', () => {
            if (nav.classList.contains('nav--opened')) {
                nav.classList.remove('nav--opened');
                nav.classList.add('nav--closed');
            } else {
                nav.classList.add('nav--opened');
            }
        })
        navLinks.forEach(link => {
            link.addEventListener('touchstart', function () {
                this.classList.add('nav__link--active');
            });
            link.addEventListener('touchend', function () {
                this.classList.remove('nav__link--active');
            });
            link.addEventListener('touchcancel', function () {
                this.classList.remove('nav__link--active');
            });
        });

        navItems.forEach(item => {
            item.addEventListener('click', function () {
                navItems.forEach(item => {
                    item.classList.remove('nav__item--active');
                })
                navLinks.forEach(link => {
                    link.classList.remove('nav__link--active');
                })
                this.classList.add('nav__item--active');
                this.querySelector('.nav__link').classList.add('nav__link--active');
                if (nav.classList.contains('nav--opened')) {
                    nav.classList.remove('nav--opened');
                    nav.classList.add('nav--closed');
                }

            });
        });

        const sections = document.querySelectorAll('.section-link');

        function addActiveClass() {
            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();

                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    navItems.forEach(navItem => {
                        navItem.classList.remove('nav__item--active');
                    });

                    navLinks.forEach(navLink => {
                        navLink.classList.remove('nav__link--active');
                    });

                    navItems[index].classList.add('nav__item--active');
                    navLinks[index].classList.add('nav__link--active');

                }
            });
        }

        window.addEventListener('scroll', addActiveClass);
    }
};
</script>
