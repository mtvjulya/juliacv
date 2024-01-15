<template>
    <section class="traits">
        <div class="main-wrapper traits__wrapper">

            <h2 class="main__title traits__title">{{ currentLang === 'en' ? 'Traits' : 'Качества' }}</h2>

            <div v-if="currentLang === 'en'" class="traits__blocks-wrapper">
                <div class="traits__block">
                    <p class="paragragh traits__text">Passionate about Technology and Design</p>
                </div>
                <div class="traits__block">
                    <p class="paragragh traits__text">Eager to Upskill and Qualification</p>
                </div>
                <div class="traits__block">
                    <p class="paragragh traits__text">Eager to Get My Hands Dirty with State-of-the-Art Tech</p>
                </div>
                <div class="traits__block">
                    <p class="paragragh traits__text">Learn and Adapt Quickly</p>
                </div>
            </div>
            <div v-else class="traits__blocks-wrapper">
                <div class="traits__block">
                    <p class="paragragh traits__text">Обожаю технологии и дизайн</p>
                </div>
                <div class="traits__block">
                    <p class="paragragh traits__text">Стремлюсь к постоянному улучшению навыков</p>
                </div>
                <div class="traits__block">
                    <p class="paragragh traits__text">Не боюсь испачкать руки в самых современных технологиях</p>
                </div>
                <div class="traits__block">
                    <p class="paragragh traits__text">Быстро учусь и адаптируюсь</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>



export default {
    name: "TraitsComponent",

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



        // Получаем элементы
        const aboutSection = document.querySelector('.about');
        const traitsBlocks = document.querySelectorAll('.traits__block');

// Обработчик события прокрутки
        window.addEventListener('scroll', function () {
            const previousElementRect = aboutSection.getBoundingClientRect();

            // Проверяем, если предыдущий элемент видим в окне просмотра
            if (previousElementRect.bottom * 2 <= window.innerHeight) {
                // Предыдущий элемент видим, запускаем код на целевом элементе
                traitsBlocks.forEach(block=>block.style.opacity = 1)
                traitsBlocks.forEach(block=>block.style.transform = 'translate(0px,0px)');

            } else {
                traitsBlocks.forEach(block=>block.style.opacity = 0);
                traitsBlocks[0].style.transform = 'translate(-200px)';
                traitsBlocks[1].style.transform = 'translate(200px)';
                traitsBlocks[2].style.transform = 'translate(0px, -200px)';
                traitsBlocks[3].style.transform = 'translate(0px, -200px)';
            }
        });

    }
};
</script>

<style scoped>
/* Ваши стили для компонента */
</style>
