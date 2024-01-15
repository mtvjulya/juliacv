<template>
    <section class="contact section-link" id="contact">
        <h2 class="main__title contact__title">{{ currentLang === 'en' ? 'Get in touch' : 'Контакты' }}</h2>

        <div v-if="currentLang === 'en'" class="contact__wrapper">
            <h3 class="contact__name">Yulia Reutova</h3>
            <img class="contact__photo" src="storage/me-5-small.png" width="125" alt="Yulia Reutova">
            <div class="contact__wrapper-line">

                <div class="contact__item contact__item--linkedin">
                    <a class="contact__link" href="tel:+353838831613" target="_blank">
                        <img class="contact__icon contact__icon--blue contact__icon--shake" src="storage/phone.svg" width="50" alt="phone"><span class="contact__text">+353838831613</span>
                    </a>
                </div>
                <div class="contact__item contact__item--email contact__item--pink">
                    <a class="contact__link" href="mailto:mtvjulia@yahoo.com" target="_blank">
                        <img class="contact__icon contact__icon--pink contact__icon--translate" src="storage/email.svg" width="50" alt="email"><span class="contact__text">mtvjulia@yahoo.com</span>
                    </a>
                </div>
                <div class="contact__item contact__item--linkedin ">
                    <a class="contact__link" href="https://www.linkedin.com/in/yulia-reutova" target="_blank">
                        <img class="contact__icon contact__icon--blue contact__icon--rotate" src="storage/LinkedIn_icon.svg" width="50" alt="LinkedIn"><span class="contact__text">Connect on LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
        <div v-else class="contact__wrapper">
            <h3 class="contact__name">Юлия Реутова</h3>
            <img class="contact__photo" src="storage/me-5-small.png" width="125" alt="Юлия Реутова">
            <div class="contact__wrapper-line">

                <div class="contact__item contact__item--linkedin">
                    <a class="contact__link" href="tel:+353838831613" target="_blank">
                        <img class="contact__icon contact__icon--blue contact__icon--shake" src="storage/phone.svg" width="50" alt="phone"><span class="contact__text">+353838831613</span>
                    </a>
                </div>
                <div class="contact__item contact__item--email contact__item--pink">
                    <a class="contact__link" href="mailto:mtvjulia@yahoo.com" target="_blank">
                        <img class="contact__icon contact__icon--pink contact__icon--translate" src="storage/email.svg" width="50" alt="email"><span class="contact__text">mtvjulia@yahoo.com</span>
                    </a>
                </div>
                <div class="contact__item contact__item--linkedin ">
                    <a class="contact__link" href="https://www.linkedin.com/in/yulia-reutova" target="_blank">
                        <img class="contact__icon contact__icon--blue contact__icon--rotate" src="storage/LinkedIn_icon.svg" width="50" alt="LinkedIn"><span class="contact__text">Связаться через LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    name: "ContactComponent",

    data() {
        return {
            currentLang: 'en',
        };
    },
    methods: {},
    mounted() {
        const langButtons = document.querySelectorAll('[name="lang"]');
        const traitsSection = document.querySelector('.traits');
        const experienceSection = document.querySelector('.experience');
        const experienceTitle = document.querySelector('.experience__title');
        const experienceWrapper = document.querySelector('.experience__wrapper');
        const cards = document.querySelectorAll('.experience__wrapper-line .card');
        const experienceWrapperLine = document.querySelector('.experience__wrapper-line');
        const scrollExpLeftButton = document.getElementById('scrollExpLeftButton');
        const scrollExpRightButton = document.getElementById('scrollExpRightButton');
        const cardLogos = document.querySelectorAll('.card__logo');

        langButtons.forEach(langButton => {
            langButton.addEventListener('click', e => {
                const lang = e.target.value;
                // Обновляем значение языка в компоненте
                this.currentLang = lang;
            });
        });

        function scrollExperience(padding, translate) {
            experienceSection.style.paddingTop = padding + 'px';
            experienceTitle.style.transform = 'translateY(-' + translate + 'px)';
            experienceTitle.classList.remove('about--transform');
            experienceWrapper.style.transform = 'translateY(-' + translate + 'px)';
            experienceWrapper.classList.remove('about--transform');
        }

        function bounce() {
            cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));
        }

        window.addEventListener('scroll', function () {
            let scrollPosition = window.pageYOffset;
            let offset = traitsSection.offsetHeight;
            if (scrollPosition / 3 > offset && scrollPosition / 4 < offset && window.innerWidth < 767) {

                scrollExperience(50, 20);
                cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));
            } else if (scrollPosition / 2.4 >= offset && scrollPosition / 2.7 <= offset && window.innerWidth < 767) {

                scrollExperience(100, 10);
            } else if (scrollPosition / 2.4 > offset && scrollPosition / 2.9 < offset && window.innerWidth >= 1200) {

                scrollExperience(110, 80);
            } else if (scrollPosition / 2.95 >= offset && window.innerWidth >= 1200) {

                scrollExperience(130, 10);
                cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));
            } else if (scrollPosition / 3 >= offset && scrollPosition / 4 < offset && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(150, 10);
                cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));
            } else if (scrollPosition / 2.6 >= offset && scrollPosition / 2.9 < offset && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(75, 10);
            } else {
                //experienceSection.style.paddingTop = '40px';
                experienceTitle.style.transform = 'translateY(100px)';
                experienceTitle.classList.remove('about--transform');
                experienceWrapper.style.transform = 'translateY(100px)';
                experienceWrapper.classList.remove('about--transform');
                cardLogos.forEach(logo => logo.classList.remove('card__logo--bounce'));
            }
        });


        let count = 0;
        let width = 0;

        if (window.innerWidth < 1200) {

            if (window.innerWidth > 768 && window.innerWidth < 1200) {
                width = experienceWrapper.offsetWidth / 2 - 20;

            } else {
                width = experienceWrapper.offsetWidth - 60;
            }
            let init = () => {


                experienceWrapperLine.style.width = (width) * cards.length + 'px';
                cards.forEach(card => {
                    card.style.width = width + 'px';
                })
                rollCards();
            }
            init();
            window.addEventListener('resize', init);

            scrollExpRightButton.addEventListener('click', () => {
                count++;
                if (count >= cards.length) {
                    count = cards.length - 1;
                }
                rollCards();
            })
            scrollExpLeftButton.addEventListener('click', () => {
                count--;
                if (count <= 0) {
                    count = 0;
                }
                rollCards();
            })

            function rollCards() {
                experienceWrapperLine.style.transform = 'translate(-' + (width) * count + 'px)';
            }

            experienceWrapper.addEventListener('touchstart', handleTouchStart, false);
            experienceWrapper.addEventListener('touchmove', handleTouchMove, false);
            let x1 = null;
            let y1 = null;

            function handleTouchStart(event) {
                const firstTouch = event.touches[0];
                x1 = firstTouch.clientX;
                y1 = firstTouch.clientY;
            }

            function handleTouchMove(event) {
                if (!x1 || !y1) {
                    return false;
                }
                let x2 = event.touches[0].clientX;
                let y2 = event.touches[0].clientY;
                let diffX = x2 - x1;
                let diffY = y2 - y1;
                if (Math.abs(diffY) > Math.abs(diffX)) {
                    return; // Игнорировать движение по вертикали
                }
                if (Math.abs(diffX) > Math.abs(diffY)) {
                    if (diffX > 0) {
                        count--;
                        if (count <= 0) {
                            count = 0;
                        }
                        rollCards();
                    } else {
                        count++;
                        if (count >= cards.length) {
                            count = cards.length - 1;
                        }
                        rollCards();
                    }
                }
                x1 = null;
                y1 = null;
            }
        }
    }
};
</script>

