$(document).ready(function () {

    var templateUrl = '<?php get_template_directory_uri(); ?>';

    gsap.from('.logo', { opacity: 0, delay: .1, y: 30 });
    gsap.from('.main-info', { opacity: 0, delay: .1, y: 30 });

    Fancybox.bind('[data-fancybox]', {
        groupAttr: null,
        aspectRatio : true,
        fitToView: true,
        autoFocus: false,
        template: {
            closeButton: '<img class="close-btn" src="wp-content/themes/uzduotis/assets/icons/close.svg" />',
        },
        on: {
            ready: (fancybox) => {
                gsap.from('.logo2', { opacity: 0, delay: .1, y: 30 });
                gsap.from('.modal-title', { opacity: 0, delay: .1, y: 30 });
                gsap.from('.wave', { opacity: 0, delay: .1, y: 30 });
                gsap.from('.person-name', { opacity: 0, delay: .1, y: 30 });
                gsap.from('.contacts', { opacity: 0, delay: .1, y: 30 });
                gsap.from('.form-group', { opacity: 0, delay: .1, y: 30 });
                document.querySelector(".logo").style.display = "none";
                document.querySelector(".main-info").style.display = "none";
            },
            closing: (fancybox) => {
                document.querySelector(".logo").style.display = "";
                document.querySelector(".main-info").style.display = "";
                gsap.from('.logo', { opacity: 0, delay: .1, y: 30 });
                gsap.from('.main-info', { opacity: 0, delay: .1, y: 30 });
            }
        },
        Carousel: {
            Panzoom: {
                touch: false,
            },
        },
    });
});