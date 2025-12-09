const headerLogo = document.querySelector('.header__logo');

const scrollFn = () => {
    if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
        headerLogo.classList.add('shrink');
    }else{
        headerLogo.classList.remove('shrink');
    }
}

window.addEventListener('scroll', scrollFn);