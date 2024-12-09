
(function () {

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * gallery isotope and filter
     */
    window.addEventListener('load', () => {
        let galleryContainer = select('.gallery-container');
        if (galleryContainer) {
            let galleryIsotope = new Isotope(galleryContainer, {
                itemSelector: '.gallery-item',
                layoutMode: 'fitRows'
            });

            let galleryFilters = select('#gallery-flters li', true);

            on('click', '#gallery-flters li', function (e) {
                e.preventDefault();
                galleryFilters.forEach(function (el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                galleryIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
                galleryIsotope.on('arrangeComplete', function () {
                    AOS.refresh()
                });
            }, true);
        }

    });

    /**
     * Initiate gallery lightbox 
     */
    const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
    });

    /**
     * gallery details slider
     */
    new Swiper('.gallery-details-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

})()