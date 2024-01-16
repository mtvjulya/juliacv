<template>
    <header class="main-header">
        <intro-component></intro-component>
        <nav-component></nav-component>
    </header>
</template>
<script>
import IntroComponent from "./IntroComponent.vue";
import NavComponent from "./NavComponent.vue";
export default {
    name: "HeaderComponent",
    components: { NavComponent, IntroComponent},
    data() {
        return {

        };
    },
    mounted() {
            const stickyNav = document.querySelector('.nav');
            const intro = document.querySelector('.intro');
            const stickySectionOffsetTop = intro.offsetHeight;

        window.onscroll = function() {
            if (window.pageYOffset >= stickySectionOffsetTop) {
                stickyNav.classList.add('sticky');
            } else {
                stickyNav.classList.remove('sticky');
            }
        };
    }
};
</script>

<style scoped>
/* Ваши стили для компонента */
</style>
