var swiper = new Swiper(".slide-content",
    {
        slidesPerView: 3,
        spaceBetween: 30,
        centerSlide: 'true',
        fade: 'true',
        loop: 'true',
        gragCusor: 'true',
        autoplay: true,
        lopFillGroupWithBlanks: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 5,
            }
        }
    });

/**
* executive-team slider
*/
new Swiper('.executive-team-slider', {
    speed: 600,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 4,
            spaceBetween: 20
        }
    }
});