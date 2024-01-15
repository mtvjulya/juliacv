const langButtons = document.querySelectorAll('[name="lang"]');
let currentLang =  document.documentElement.getAttribute('lang');
console.log(currentLang);
langButtons.forEach(langButton => {
    langButton.addEventListener('click', e => {
        //  e.preventDefault();

        const lang = e.target.value;

        // Обновляем значение языка в компоненте
       currentLang = lang;

        // Обновляем значение атрибута lang в элементе <html>
        document.documentElement.setAttribute('lang', lang);
    });
});
