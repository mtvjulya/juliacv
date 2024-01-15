<template>
    <button class="language-button" type="button" name="lang" :value="value"><slot>English</slot></button>
</template>

<script>
export default {
    name: "LanguageButton",
    props: {
        value: {
            type: String,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
