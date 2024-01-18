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

// const navLinks = document.querySelectorAll('.nav__link--en');
// const navLinksRu = document.querySelectorAll('.nav__link--ru');
// const sections = document.querySelectorAll('.section-link');
// const navItems = document.querySelectorAll('.nav__item--en');
// const navItemsRu = document.querySelectorAll('.nav__item--ru');
// function addActiveClass() {
//     sections.forEach((section, index) => {
//         const rect = section.getBoundingClientRect();
//
//         if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
//             navItems.forEach(navItem => {
//                 navItem.classList.remove('nav__item--active');
//             });
//             navItemsRu.forEach(navItem => {
//                 navItem.classList.remove('nav__item--active');
//             });
//             navLinks.forEach(navLink => {
//                 navLink.classList.remove('nav__link--active');
//             });
//             navLinksRu.forEach(navLink => {
//                 navLink.classList.remove('nav__link--active');
//             });
//             navItems[index].classList.add('nav__item--active');
//             navLinks[index].classList.add('nav__link--active');
//             navItemsRu[index].classList.add('nav__item--active');
//
//             navLinksRu[index].classList.add('nav__link--active');
//         }
//     });
// }
//
// window.addEventListener('scroll', addActiveClass);
