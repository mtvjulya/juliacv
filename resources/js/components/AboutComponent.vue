<template>
    <section class="about section-link" id="about">
        <h2 class="main__title about__title">{{ currentLang === 'en' ? 'About me' : 'Обо мне' }}</h2>
        <div  class="about__wrapper">
            <div class="about__wrapper-line">
                <div class="card">
                    <div class="card__header-wrapper">
                        <h3 class="card__header">{{ currentLang === 'en' ? 'Education:' : 'Образование:' }}</h3>
                    </div>

                    <ul class="card__list card__list--education">
                        <li class="card__item"><span class="card__item-name">{{
                                currentLang === 'en' ? 'HTML Academy ' : 'HTML Academy '
                            }}</span>
                            {{ currentLang === 'en' ? '- Frontend developer / React developer' : '- Frontend разработчик / React разработчик' }}

                        </li>
                        <li class="card__item"><span
                            class="card__item-name">{{
                                currentLang === 'en' ? 'Harbin Institute of Technology, China ' : 'Харбинский Политехнический Университет, Китай '
                            }}</span>{{
                                currentLang === 'en' ? '- MSc in Management Science and Engineering(IBM program) ' : ' - Степень Магистра в области Управления и Техники'}}
                        </li>
                        <li class="card__item"><span class="card__item-name">{{
                                currentLang === 'en' ? 'Siberian State University, Russia':'Сибирский Федеральный Университет'}}</span>{{
                                currentLang === 'en' ? ' - MSc in System Analysis and Control Process':' - Степень Магистра в области Системный Анализ и Управление'}}
                        </li>
                        <li class="card__item"><span class="card__item-name">{{
                                currentLang === 'en' ? 'Siberian State University, Russia ' : 'Сибирский Федеральный Университет '
                            }}</span>{{
                                currentLang === 'en' ? ' - Interpreter / Translator in Business communication (English)' : '- Переводчик в сфере профессиональных коммуникаций'
                            }}
                        </li>
                        <li class="card__item"><span class="card__item-name">{{
                                currentLang === 'en' ? 'Siberian State University, Russia ' : 'Сибирский Федеральный Университет '}}</span>{{
                                currentLang === 'en' ? '- Bachelor in System Analysis and Control Process' : '- Степень Бакалавра в области Системный Анализ и Управление'
                            }}
                        </li>
                    </ul>

                </div>

                <div class="card">
                    <div class="card__header-wrapper">
                        <h3 class="card__header">{{
                                currentLang === 'en' ? 'Tech Skills:':'Технические навыки:'}}</h3>
                    </div>

                    <ul class="card__list card__list--hard-skills">
                        <li class="card__item ">{{
                                currentLang === 'en' ? 'JavaScript, HTML, CSS, Bootstrap, React, Laravel, PHP':'JavaScript, HTML, CSS, Bootstrap, React, Laravel, PHP'}}</li>
                        <li class="card__item">{{
                                currentLang === 'en' ? '3D MAX, Blender, Adobe Animate':'3D MAX, Blender, Adobe Animate'}}</li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'SQL, PostgreSQL':'SQL, PostgreSQL'}}</li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'CorelDraw, Photoshop':'CorelDraw, Photoshop'}}</li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'MS Office, MS Excel':'MS Office, MS Excel'}}</li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Figma':'Figma'}}</li>
                    </ul>

                </div>
                <div class="card">
                    <div class="card__header-wrapper">
                        <h3 class="card__header">{{
                                currentLang === 'en' ? 'Languages:':'Языки:'}}</h3>
                    </div>

                    <ul class="card__list card__list--lang">
                        <li class="card__item ">{{
                                currentLang === 'en' ? 'English':'Английский'}}</li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Russian':'Русский'}}</li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Chinese':'Китайский'}}</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper">
                        <h3 class="card__header">{{
                                currentLang === 'en' ? 'Awards:':'Награды:'}}</h3>
                    </div>

                    <ul class="card__list card__list--awards">
                        <li class="card__item "><span class="card__item-name">{{
                                currentLang === 'en' ? 'Siberian State University: ':'Сибирский Федеральный Университет:'}}</span> {{
                                currentLang === 'en' ? 'The best student':'Лучший студент СФУ'}}
                        </li>
                        <li class="card__item"><span class="card__item-name">{{
                                currentLang === 'en' ? 'Harbin Institute of Technology: ':'Харбинский Политехнический Университет:'}}</span>{{
                                currentLang === 'en' ? 'Outstanding International Student':' Лучший инностранный студент'}}
                        </li>
                        <li class="card__item"><span class="card__item-name">{{
                                currentLang === 'en' ? 'Modelling United Nations event: ':'Моделирование деятельности ООН ХПИ:'}}</span>{{
                                currentLang === 'en' ? 'Best Position Paper':' награда в номинации “Лучший мемерандум” '}}
                        </li>
                    </ul>

                </div>
            </div>

        </div>

        <button class="about__scroll-button scroll-left-button" id="scrollLeftButton" aria-label="Left"></button>
        <button class="about__scroll-button scroll-right-button" id="scrollRightButton" aria-label="Right"></button>
    </section>
</template>

<script>

export default {
    name: "AboutComponent",

    data() {
        return {
            currentLang: 'en',
        };
    },
    methods: {},
    mounted() {
        const langButtons = document.querySelectorAll('[name="lang"]');
        const aboutSection = document.querySelector('.about');
        const introSection = document.querySelector('.intro');
        const aboutTitle = document.querySelector('.about__title');
        const aboutWrapper = document.querySelector('.about__wrapper');
        const cards = document.querySelectorAll('.about__wrapper-line .card');
        const aboutWrapperLine = document.querySelector('.about__wrapper-line');
        const scrollLeftButton = document.getElementById('scrollLeftButton');
        const scrollRightButton = document.getElementById('scrollRightButton');

        langButtons.forEach(langButton => {
            langButton.addEventListener('click', e => {
                const lang = e.target.value;
                // Обновляем значение языка в компоненте
                this.currentLang = lang;
            });
        });

        function scrollAbout(padding, translate) {
            aboutSection.style.paddingTop = padding + 'px';
            aboutTitle.style.transform = 'translateY(-' + translate + 'px)';
            aboutTitle.classList.remove('about--transform');
            aboutWrapper.style.transform = 'translateY(-' + translate + 'px)';
            aboutWrapper.classList.remove('about--transform');
        }

        window.addEventListener('scroll', function () {
            let scrollPosition = window.pageYOffset;
            let offset = introSection.offsetHeight;
            if (scrollPosition > offset / 4 && scrollPosition < offset && window.innerWidth < 767) {
                scrollAbout(50, 50);
            } else if (scrollPosition > offset / 2 && scrollPosition < offset && window.innerWidth >= 1200) {
                scrollAbout(150, 100);
            } else if (scrollPosition >= offset && window.innerWidth >= 1200) {
                scrollAbout(150, 10);
            } else if (scrollPosition >= offset && window.innerWidth < 767) {
                scrollAbout(150, 10);

            } else if (scrollPosition >= offset/3  && window.innerWidth >= 767 && window.innerWidth < 1200) {
                scrollAbout(250, 50);
            } else {
                aboutSection.style.paddingTop = '150px';
                aboutTitle.style.transform = 'translateY(100px)';
                aboutTitle.classList.remove('about--transform');
                aboutWrapper.style.transform = 'translateY(100px)';
                aboutWrapper.classList.remove('about--transform');
            }
        });


        let count = 0;
        let width = 0;

        if (window.innerWidth < 1200) {

            if (window.innerWidth > 768 && window.innerWidth < 1200) {

                width = aboutWrapper.offsetWidth / 2 - 20;


            } else {
                width = aboutWrapper.offsetWidth - 60;
            }
            let init = () => {


                aboutWrapperLine.style.width = (width) * cards.length + 'px';
                cards.forEach(card => {
                    card.style.width = width + 'px';
                })
                rollCards();
            }
            init();
            window.addEventListener('resize', init);

            scrollRightButton.addEventListener('click', () => {
                count++;
                if (count >= cards.length) {
                    count = cards.length - 1;
                }
                rollCards();
            })
            scrollLeftButton.addEventListener('click', () => {
                count--;
                if (count <= 0) {
                    count = 0;
                }
                rollCards();
            })

            function rollCards() {
                aboutWrapperLine.style.transform = 'translate(-' + (width) * count + 'px)';
            }

            aboutWrapper.addEventListener('touchstart', handleTouchStart, false);
            aboutWrapper.addEventListener('touchmove', handleTouchMove, false);
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


