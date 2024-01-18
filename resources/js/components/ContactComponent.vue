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
        const experienceSection = document.querySelector('.experience');
        const contactSection = document.querySelector('.contact');
        const contactTitle = document.querySelector('.contact__title');
        const contactWrapper = document.querySelector('.contact__wrapper');



        langButtons.forEach(langButton => {
            langButton.addEventListener('click', e => {
                const lang = e.target.value;
                // Обновляем значение языка в компоненте
                this.currentLang = lang;
            });
        });

        function scrollContact(padding, translate) {
            contactSection.style.paddingTop = padding + 'px';
            contactTitle.style.transform = 'translateY(-' + translate + 'px)';
            contactTitle.classList.remove('about--transform');
            contactWrapper.style.transform = 'translateY(-' + translate + 'px)';
            contactWrapper.classList.remove('about--transform');
        }



        // window.addEventListener('scroll', function () {
        //     let scrollPosition = window.pageYOffset;
        //     let offset = experienceSection.offsetHeight;
        //     if (scrollPosition / 3 > offset && scrollPosition / 4 < offset && window.innerWidth < 767) {
        //
        //         scrollContact(50, 20);
        //
        //     } else if (scrollPosition / 2.4 >= offset && scrollPosition / 2.7 <= offset && window.innerWidth < 767) {
        //
        //         scrollContact(100, 10);
        //     } else if (scrollPosition / 2.4 > offset && scrollPosition / 2.9 < offset && window.innerWidth >= 1200) {
        //
        //         scrollContact(110, 80);
        //     } else if (scrollPosition / 2.95 >= offset && window.innerWidth >= 1200) {
        //
        //         scrollContact(130, 10);
        //
        //     } else if (scrollPosition / 3 >= offset && scrollPosition / 4 < offset && window.innerWidth >= 767 && window.innerWidth < 1200) {
        //
        //         scrollContact(150, 10);
        //
        //     } else if (scrollPosition / 2.6 >= offset && scrollPosition / 2.9 < offset && window.innerWidth >= 767 && window.innerWidth < 1200) {
        //
        //         scrollContact(75, 10);
        //     } else {
        //         //experienceSection.style.paddingTop = '40px';
        //         contactTitle.style.transform = 'translateY(100px)';
        //         contactTitle.classList.remove('contact--transform');
        //         contactWrapper.style.transform = 'translateY(100px)';
        //         contactWrapper.classList.remove('contact--transform');
        //
        //     }
        // });



    }
};
</script>

