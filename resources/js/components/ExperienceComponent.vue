<template>
    <section class="experience section-link" id="experience">
        <h2 class="main__title experience__title">{{ currentLang === 'en' ? 'Experience' : 'Опыт работы' }}</h2>

        <div v-if="currentLang === 'en'" class="experience__wrapper">
            <div class="experience__wrapper-line">

                <div class="card card--experience">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">Web Developer</h3>
                        <p class="card__subheader">English Style</p>
<!--                        <p class="card__date">June 2022 - December 2023</p>-->
                        <img class="card__logo" src="storage/engstyle.png" width="100" height="100" alt="engstyle">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">Creating and maintaining website</li>
                        <li class="card__item">Responsible for the site&apos;s technical aspects, content and
                            support
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">Assistant Director/<br>Translator (Chinese)</h3>
                        <p class="card__subheader">Stone Petroleum Equipment</p>
<!--                        <p class="card__date">April 2015 - February 2016</p>-->
                        <img class="card__logo" src="storage/stone.png" width="100" height="100" alt="stone">
                    </div>


                    <ul class="card__list card__list--experience">
                        <li class="card__item">Searching and dealings with business partners</li>
                        <li class="card__item">Office Management</li>
                        <li class="card__item">Web page administration</li>
                        <li class="card__item">Written and verbal translation</li>
                        <li class="card__item">Office equipment maintaining</li>
                        <li class="card__item">Hiring employees</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">1C software developer</h3>
                        <p class="card__subheader">1C BIT</p>
<!--                        <p class="card__date">December 2011 - April 2012</p>-->
                        <img class="card__logo" src="storage/1c.png" width="100" height="100" alt="1c">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">Development 1C Software</li>
                        <li class="card__item">Update and maintain 1C software</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">Summer school Intern</h3>
                        <p class="card__subheader">Intel Corporation</p>
<!--                        <p class="card__date">June 2010 - August 2010</p>-->
                        <img class="card__logo" src="storage/intel.png" width="100" height="100" alt="intel">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">Compiled daily reports for management</li>
                        <li class="card__item">Conducted an analysis of existing reporting systems</li>
                        <li class="card__item">Derived criteria for evaluating the effectiveness of reporting systems
                        </li>
                        <li class="card__item">Developed operating instructions for the reporting system</li>
                    </ul>
                </div>
            </div>

        </div>
        <div v-else class="experience__wrapper">

            <div class="experience__wrapper-line">
                <div class="card card--experience">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">Веб-разработчик</h3>
                        <p class="card__subheader">Английский стиль</p>
                        <!--                        <p class="card__date">June 2022 - December 2023</p>-->
                        <img class="card__logo" src="storage/engstyle.png" width="100" height="100" alt="engstyle">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">Создание и поддержка веб-сайта</li>
                        <li class="card__item">Выполнение задач, связанных с техническими аспектами, содержанием и
                            поддержкой сайта
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">Ассистент директора/<br>Переводчик (китайский)</h3>
                        <p class="card__subheader">СтоунНефтьОборудование</p>
                        <!--                        <p class="card__date">April 2015 - February 2016</p>-->
                        <img class="card__logo" src="storage/stone.png" width="100" height="100" alt="stone">
                    </div>


                    <ul class="card__list card__list--experience">
                        <li class="card__item">Поиск и взаимодействие с деловыми партнерами</li>
                        <li class="card__item">Управление офисом</li>
                        <li class="card__item">Администрирование веб-страницы</li>
                        <li class="card__item">Письменный и устный перевод</li>
                        <li class="card__item">Обслуживание офисного оборудования</li>
                        <li class="card__item">Наем сотрудников</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">1C Разработчик</h3>
                        <p class="card__subheader">1C BIT</p>
                        <!--                        <p class="card__date">December 2011 - April 2012</p>-->
                        <img class="card__logo" src="storage/1c.png" width="100" height="100" alt="1c">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">Разработка 1C программ</li>
                        <li class="card__item">Обновление и установка программного обеспечения 1C</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">Интерн</h3>
                        <p class="card__subheader">Intel Corporation</p>
                        <!--                        <p class="card__date">June 2010 - August 2010</p>-->
                        <img class="card__logo" src="storage/intel.png" width="100" height="100" alt="intel">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">Ежедневная отчетность для руководства</li>
                        <li class="card__item">Проведен анализ существующих систем отчетности</li>
                        <li class="card__item">Разработка критериев оценки эффективности систем отчетности
                        </li>
                        <li class="card__item">Разработка инструкции по эксплуатации системы отчетности</li>
                    </ul>
                </div>
            </div>


        </div>

        <button class="experience__scroll-button scroll-left-button" id="scrollExpLeftButton" aria-label="Left"></button>
        <button class="experience__scroll-button scroll-right-button" id="scrollExpRightButton" aria-label="Right"></button>
    </section>
</template>

<script>

export default {
    name: "ExperienceComponent",

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

        function bounce(){
            cardLogos.forEach(logo=>logo.classList.add('card__logo--bounce'));
        }

        window.addEventListener('scroll', function () {
            let scrollPosition = window.pageYOffset;
            let offset = traitsSection.offsetHeight;
            if (scrollPosition/ 3 > offset  && scrollPosition/4 < offset && window.innerWidth < 767) {

                scrollExperience(50, 20);
                cardLogos.forEach(logo=>logo.classList.add('card__logo--bounce'));
            } else if (scrollPosition/2.4 >= offset && scrollPosition/2.7 <= offset && window.innerWidth < 767) {

                scrollExperience(100, 10);
            } else if (scrollPosition/ 2.4 > offset  && scrollPosition/ 2.9 < offset && window.innerWidth >= 1200) {

                scrollExperience(110, 80);
            } else if (scrollPosition / 2.95 >= offset && window.innerWidth >= 1200) {

                scrollExperience(130, 10);
                cardLogos.forEach(logo=>logo.classList.add('card__logo--bounce'));
            } else if (scrollPosition/3 >= offset && scrollPosition/4 < offset && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(150, 10);
                cardLogos.forEach(logo=>logo.classList.add('card__logo--bounce'));
            } else if (scrollPosition/ 2.6 >= offset && scrollPosition/2.9 < offset  && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(75, 10);
            }
            else {
                //experienceSection.style.paddingTop = '40px';
                experienceTitle.style.transform = 'translateY(100px)';
                experienceTitle.classList.remove('about--transform');
                experienceWrapper.style.transform = 'translateY(100px)';
                experienceWrapper.classList.remove('about--transform');
                cardLogos.forEach(logo=>logo.classList.remove('card__logo--bounce'));
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

