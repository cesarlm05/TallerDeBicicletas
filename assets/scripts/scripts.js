// @ts-ignore
addEventListener('DOMContentLoaded', () => {
    // @ts-ignore
    const btn__menu = document.querySelector('.btn__menu')
    if (btn__menu) {
        btn__menu.addEventListener('click', () => {
            // @ts-ignore
            const navbar = document.querySelector('.menu__items')
            navbar.classList.toggle('show')
        })
    }
});