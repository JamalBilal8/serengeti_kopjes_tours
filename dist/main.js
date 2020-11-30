window.onload = () => {
    setTimeout(() => {
        document.querySelector("body").classList.add("display");
    }, 4000);
};

document.querySelector('.hamburger-menu').addEventListener('click', () => {
    document.querySelector('.container').classList.toggle('change');
});

document.querySelector('.scroll-btn').addEventListener('click',() => {
    document.querySelector('html').style.scrollBehavior = 'smooth';
    setTimeout(() => {
        document.querySelector('html').style.scrollBehavior = 'unset';
    }, 1000);

});

$(document).ready(function () {
    //owl-carousel
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        dots:false,

        margin:3,
        responsiveClass:true,
        responsive: {
            0: {
                items :1
            },
            600: {
                items :2
            },
            700: {
                items :2
            },
            1000: {
                items: 3
            }
        }
    });
});

