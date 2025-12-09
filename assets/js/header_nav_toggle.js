const menuBtn = document.querySelector('.menu-btn');
const headerRight = document.querySelector('.header__right');

const toggleMenu = () => {
    menuBtn.classList.toggle('open');
    headerRight.classList.toggle('open');
}

menuBtn.addEventListener('click', toggleMenu);