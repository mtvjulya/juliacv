<template>
    <section class="intro section-link" id="home" >


        <h1 v-if="currentLang === 'en'" class="visually-hidden" >CV of Yulia Reutova. I am a Frontend developer / Web
            developer</h1>
        <h1 v-else class="visually-hidden">Резюме Юлии Реутовой. Фронтенд-разработчик. Вэб-разработчик.</h1>
            <div class="intro__languge-battons-wrapper" >
                <LanguageButton value="en">Eng</LanguageButton>
                <LanguageButton value="ru">Рус</LanguageButton>
            </div>

            <div class="intro__image-wrapper">
                <div class="intro__image-container"></div>
                <picture>
                    <source srcset="/storage/me-5-smaller.webp" type="image/webp">
                    <source srcset="/storage/me-5-smaller.png" type="image/jpeg">
                    <img class="intro__image" src="/storage/me-5-smaller.png" alt="Yulia Reutova, a web-developer" width="450" height="800">

                    <source media="(max-width: 767px)" srcset="/storage/me-5-smaller-mobile.webp" type="image/webp">
                    <source media="(max-width: 767px)" srcset="/storage/me-5-smaller-mobile.png" type="image/png">
                    <img class="intro__image" src="/storage/me-5-smaller-mobile.png"
                         alt="Yulia Reutova, a web-developer" width="297" height="520">
                </picture>
<!--                <img class="intro__image" src="/storage/me-8-smaller.png">-->
            </div>


        <div v-if="currentLang === 'en'" class="intro__text-wrapper">
            <p class="paragragh intro__text"><span class="intro__detail">Hi there, my name is</span><br> <span
                class="intro__name">Yulia<br> Reutova</span><br> and I am a<span
                class="intro__detail intro__detail--uppercase"> Front-end developer</span>.</p>
        </div>
        <div v-else class="intro__text-wrapper">
            <p class="paragragh intro__text"><span class="intro__detail">Привет, меня зовут</span><br> <span
                class="intro__name">Юлия<br> Реутова</span><br> и Я - <span
                class="intro__detail">Фронтенд разработчик</span>.</p>
        </div>

    </section>
</template>

<script>

import LanguageButton from "./LanguageButton.vue";

export default {
    name: "IntroComponent",
    components: {LanguageButton},
    data() {
        return {
            currentLang: 'en'
        };
    },
    mounted() {
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




        window.addEventListener('scroll', function() {
            let scrollStep = 2;
            let imageWrapper = document.querySelector('.intro__image-wrapper');
            let textWrapper = document.querySelector('.intro__text-wrapper');
            let scrollPosition = window.pageYOffset;

            if (scrollPosition>600){
                scrollPosition = 600;
            }
            let offset = Math.floor(scrollPosition / scrollStep);

            imageWrapper.style.transform = 'translateY(' + offset + 'px)';

            textWrapper.style.transform = 'translateY(' + offset + 'px)';


        });
    }
};
</script>

<style scoped>
/* Ваши стили для компонента */
</style>
