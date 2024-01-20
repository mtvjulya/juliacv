<template>
    <section class="experience section-link" id="experience">
        <h2 class="main__title experience__title">{{ currentLang === 'en' ? 'Experience' : 'Опыт работы' }}</h2>

        <div class="experience__wrapper">
            <div class="experience__wrapper-line">

                <div class="card card--experience">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">{{ currentLang === 'en' ? 'Web Developer' : 'Веб-разработчик' }}</h3>
                        <p class="card__subheader">{{ currentLang === 'en' ? 'English Style' : 'Английский стиль' }}</p>
                        <!--                        <p class="card__date">June 2022 - December 2023</p>-->
                        <img class="card__logo" src="storage/engstyle.png" width="100" height="100" alt="engstyle">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Creating and maintaining website' : 'Создание и поддержка веб-сайта'
                            }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? "Responsible for the site&apos;s technical aspects, content and support" : 'Выполнение задач, связанных с техническими аспектами, содержанием и поддержкой сайта'
                            }}
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">{{
                                currentLang === 'en' ? 'Assistant Director/' : 'Ассистент директора/'
                            }}<br>{{ currentLang === 'en' ? 'Translator (Chinese)' : 'Переводчик (китайский)' }}</h3>
                        <p class="card__subheader">
                            {{ currentLang === 'en' ? 'Stone Petroleum Equipment' : 'СтоунНефтьОборудование' }}</p>
                        <!--                        <p class="card__date">April 2015 - February 2016</p>-->
                        <img class="card__logo" src="storage/stone.png" width="100" height="100" alt="stone">
                    </div>


                    <ul class="card__list card__list--experience">
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Searching and dealings with business partners' : 'Поиск и взаимодействие с деловыми партнерами'
                            }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Office Management' : 'Управление офисом'
                            }}
                        </li>
                        <li class="card__item">
                            {{ currentLang === 'en' ? 'Web page administration' : 'Администрирование веб-страницы' }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Written and verbal translation' : 'Письменный и устный перевод'
                            }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Office equipment maintaining' : 'Обслуживание офисного оборудования'
                            }}
                        </li>
                        <li class="card__item">{{ currentLang === 'en' ? 'Hiring employees' : 'Наем сотрудников' }}</li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">{{
                                currentLang === 'en' ? '1C software developer' : '1C Разработчик'
                            }}</h3>
                        <p class="card__subheader">{{ currentLang === 'en' ? '1C BIT' : '1C BIT' }}</p>
                        <!--                        <p class="card__date">December 2011 - April 2012</p>-->
                        <img class="card__logo" src="storage/1c.png" width="100" height="100" alt="1c">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">
                            {{ currentLang === 'en' ? 'Development 1C Software' : 'Разработка 1C программ' }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Update and maintain 1C software' : 'Обновление и установка программного обеспечения 1C'
                            }}
                        </li>
                    </ul>
                </div>

                <div class="card">
                    <div class="card__header-wrapper card__header-wrapper--experience">
                        <h3 class="card__header">{{ currentLang === 'en' ? 'Summer school Intern' : 'Интерн' }}</h3>
                        <p class="card__subheader">{{
                                currentLang === 'en' ? 'Intel Corporation' : 'Intel Corporation'
                            }}</p>
                        <!--                        <p class="card__date">June 2010 - August 2010</p>-->
                        <img class="card__logo" src="storage/intel.png" width="100" height="100" alt="intel">
                    </div>

                    <ul class="card__list card__list--experience">
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Compiled daily reports for management' : 'Ежедневная отчетность для руководства'
                            }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Conducted an analysis of existing reporting systems' : 'Проведен анализ существующих систем отчетности'
                            }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Derived criteria for evaluating the effectiveness of reporting systems' : 'Разработка критериев оценки эффективности систем отчетности'
                            }}
                        </li>
                        <li class="card__item">{{
                                currentLang === 'en' ? 'Developed operating instructions for the reporting system' : 'Разработка инструкции по эксплуатации системы отчетности'
                            }}
                        </li>
                    </ul>
                </div>
            </div>

        </div>


        <button class="experience__scroll-button scroll-left-button" id="scrollExpLeftButton"
                aria-label="Left"></button>
        <button class="experience__scroll-button scroll-right-button" id="scrollExpRightButton"
                aria-label="Right"></button>
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
        const projectsSection = document.querySelector('.projects');
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
            experienceTitle.style.transform = 'translateY(' + translate + 'px)';
            experienceTitle.classList.remove('experience--transform');
            experienceWrapper.style.transform = 'translateY(' + translate + 'px)';
            experienceWrapper.classList.remove('experience--transform');
        }

        function bounce() {
            cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));
        }

        window.addEventListener('scroll', function () {
            let scrollPosition = window.pageYOffset;
            let offset = projectsSection.offsetHeight;

            if (scrollPosition  <= 3500  && window.innerWidth < 767) {
                scrollExperience(100, 50);
                cardLogos.forEach(logo => logo.classList.remove('card__logo--bounce'));

            } else if (scrollPosition  > 3500  && window.innerWidth < 767) {
                cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));
                scrollExperience(100, -20);
                // console.log('scrollPosition/3 '+scrollPosition/3);

            } else if (scrollPosition >= 3800  && window.innerWidth >= 1200) {
                scrollExperience(130, -80);
                cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));

            }else if (scrollPosition < 3800  && window.innerWidth >= 1200) {
                scrollExperience(130, 80);
                cardLogos.forEach(logo => logo.classList.remove('card__logo--bounce'));

            }else if (scrollPosition <= 5100  && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(150, 0);
                cardLogos.forEach(logo => logo.classList.remove('card__logo--bounce'));
            } else if (scrollPosition >= 5100 && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(150, -50);
                cardLogos.forEach(logo => logo.classList.add('card__logo--bounce'));

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

