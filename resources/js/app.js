import { createApp } from 'vue';
import IntroComponent from './components/IntroComponent.vue';
import LanguageButton from './components/LanguageButton.vue';
import HeaderComponent from "./components/HeaderComponent.vue";
import NavComponent from "./components/NavComponent.vue";
import AboutComponent from "./components/AboutComponent.vue";
import TraitsComponent from "./components/TraitsComponent.vue";
import ProjectsComponent from "./components/ProjectsComponent.vue";
import ExperienceComponent from "./components/ExperienceComponent.vue";
import ContactComponent from "./components/ContactComponent.vue";

const app = createApp({});
app.component('intro-component', IntroComponent);
app.component('languageButton-component', LanguageButton);
app.component('nav-component', NavComponent);
app.component('header-component', HeaderComponent);
app.component('about-component', AboutComponent);
app.component('traits-component', TraitsComponent);
app.component('projects-component', ProjectsComponent);
app.component('experience-component', ExperienceComponent);
app.component('contact-component', ContactComponent);

app.mount('#app');

const navLinks = document.querySelectorAll('nav ul li a');
const sections = document.querySelectorAll('.section-link');

function addActiveClass() {
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
