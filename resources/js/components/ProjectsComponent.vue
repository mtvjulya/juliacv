<template>
    <section class="projects section-link" id="projects">
        <h2 class="main__title projects__header">{{ currentLang === 'en' ? 'Projects' : 'Проекты' }}</h2>

        <ul v-if="currentLang === 'en'" class="projects__list clear-list">
            <li class="projects__project project" v-for="(project, index) in projects">

                <h3 class="project__title">{{ project.title }}</h3>
                <button class="project__button" type="button" @click="openPopup(index)">
                    <img class="project__pic project__pic-small" :src="project.image" width="100" height="100" :alt="project.title">
                </button>
            </li>
        </ul>

        <ul v-else class="projects__list clear-list">
            <li class="projects__project project" v-for="(project, index) in projectsRu">

                <h3 class="project__title">{{ project.title }}</h3>
                <button class="project__button" type="button" @click="openPopup(index)">
                    <img class="project__pic project__pic-small" :src="project.image" width="100" height="100" :alt="project.title">
                </button>
            </li>
        </ul>

        <div v-if="currentLang === 'en'&&this.projects.length > 0" class="project__popup-wrapper " v-show="popupOpen">
            <div class="project__popup">
                <button class="project__close-popup-button" type="button" aria-label="close"
                        @click="closePopup()" title="Close"></button>
                <h3 class="project__popup-title">{{
                         this.projects[this.currentPopupIndex].title
                    }}</h3>
                <ul class="project__features-list clear-list">
                    <li class="project__features-item"
                        v-for="(feature) in this.projects[this.currentPopupIndex].features">{{ feature }}
                    </li>
                </ul>
                <p class="project__text">{{ this.projects[this.currentPopupIndex].description }}</p>
                <a :href="projects[currentPopupIndex].project_link" target="_blank">
                <img class="project__pic" :src="projects[currentPopupIndex].popup_image" width="100" height="100"
                     :alt="projects[currentPopupIndex].title">
                </a>
            </div>
        </div>

        <div v-else class="project__popup-wrapper" v-show="popupOpen " v-if="projectsRu.length > 0">
            <div class="project__popup">
                <button class="project__close-popup-button" type="button" aria-label="close" @click="closePopup()" title="Закрыть"></button>
                <h3 class="project__popup-title">{{ projectsRu.length > 1 ? projectsRu[currentPopupIndex].title : '' }}</h3>
                <ul class="project__features-list clear-list">
                    <li class="project__features-item" v-for="feature in projectsRu[currentPopupIndex].features">{{ feature }}</li>
                </ul>
                <p class="project__text">{{ projectsRu.length > 1 ? projectsRu[currentPopupIndex].description : '' }}</p>
                <a :href="projectsRu[currentPopupIndex].project_link" target="_blank">
                    <img class="project__pic" :src="projectsRu[currentPopupIndex].popup_image" width="100" height="100" :alt="projectsRu[currentPopupIndex].title">
                </a>

            </div>
        </div>

    </section>
</template>

<script>

export default {
    name: "ProjectsComponent",

    data() {
        return {
            currentLang: 'en',
            projects: [],
            projectsRu: [],
            popupOpen: false,
            currentPopupIndex: 0,
            features: [],
        };
    },
    created() {
        this.getProjects();
        this.getProjectsRu();

    },
    methods: {

        async getProjects() {
            let requestOptions = {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
            };
            let response = await fetch("/projects", requestOptions);
            this.projects = await response.json();

            this.projects.forEach(project => {
                project.features = project.features.replace(/[\{\}\"]/g, "").split(",");
            });


        },

        async getProjectsRu() {
            let requestOptions = {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
            };
            let response = await fetch("/projects-ru", requestOptions);
            this.projectsRu = await response.json();
            this.projectsRu.forEach(project => {
                project.features = project.features.replace(/[\{\}\"]/g, "").split(",");
            });


        },
        openPopup(index) {
            this.currentPopupIndex = index;

            this.popupOpen = true;

        },
        closePopup() {

            this.popupOpen = false;

        }

    },
    mounted() {

        const langButtons = document.querySelectorAll('[name="lang"]');
        const projectsSection = document.querySelector('.projects');
        const traitsSection = document.querySelector('.traits');
        const projectsHeader = document.querySelector('.projects__header');
        const projectsList = document.querySelector('.projects__list');

        langButtons.forEach(langButton => {
            langButton.addEventListener('click', e => {
                const lang = e.target.value;
                // Обновляем значение языка в компоненте
                this.currentLang = lang;
            });
        });

        function scrollExperience(padding, translate) {
            projectsSection.style.paddingTop = padding + 'px';
            projectsHeader.style.transform = 'translateY(-' + translate + 'px)';
            projectsList.style.transform = 'translateY(-' + translate + 'px)';
        }

        window.addEventListener('scroll', function () {
            let scrollPosition = window.pageYOffset;
            let offset = traitsSection.offsetHeight;
            if (scrollPosition / 3 > offset && scrollPosition / 4 < offset && window.innerWidth < 767) {

                scrollExperience(50, 20);

            } else if (scrollPosition / 2.4 >= offset && scrollPosition / 2.7 <= offset && window.innerWidth < 767) {

                scrollExperience(100, 10);
            } else if (scrollPosition / 2.4 > offset && scrollPosition / 2.9 < offset && window.innerWidth >= 1200) {

                scrollExperience(110, 80);
            } else if (scrollPosition / 2.95 >= offset && window.innerWidth >= 1200) {

                scrollExperience(130, 10);

            } else if (scrollPosition / 3 >= offset && scrollPosition / 4 < offset && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(150, 10);

            } else if (scrollPosition / 2.6 >= offset && scrollPosition / 2.9 < offset && window.innerWidth >= 767 && window.innerWidth < 1200) {

                scrollExperience(75, 10);
            } else {
                //experienceSection.style.paddingTop = '40px';
                projectsHeader.style.transform = 'translateY(100px)';
                projectsHeader.classList.remove('about--transform');
                projectsList.style.transform = 'translateY(100px)';
                projectsList.classList.remove('about--transform');

            }
        });


    }
};
</script>

