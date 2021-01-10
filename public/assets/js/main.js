(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        /* Slider Item Slide
        ============================*/
        $(".slider").owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            nav: false,
            dots: false,
            smartSpeed: 500
        });


        /* One Page Nav
        ============================*/
        $('.mainmenu ul').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 750,
            scrollThreshold: 0.5,
            easing: 'swing',
            scrollOffset: 60
        });

        /* mesonary 
        ========================  */
        var $grid = $('.gallery-active').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1
            }
        })
        // filter items on button click(for button)
        $('.gallry-menu').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        /* Active Js */
        $('.gallry-menu button').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
        /* counter up */
        $('.counter').counterUp({
            delay: 5,
            time: 2000
        });

        // Magnific Popup starts
        $('.image-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        })
        /* Testimonials Itesm Slide
        ============================*/
        $(".testimonials").owlCarousel({
            items: 3,
            autoplay: true,
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            center: true,
            responsive: {
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                320: {
                    items: 1
                }
            }
        });
        /* progress bar */
        $(document).ready(function ($) {
            function animateElements() {
                $('.progressbar').each(function () {
                    var elementPos = $(this).offset().top;
                    var topOfWindow = $(window).scrollTop();
                    var percent = $(this).find('.circle').attr('data-percent');
                    var animate = $(this).data('animate');
                    if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                        $(this).data('animate', true);
                        $(this).find('.circle').circleProgress({
                            // startAngle: -Math.PI / 2,
                            value: percent / 100,
                            size: 400,
                            thickness: 15,
                            fill: {
                                color: '#663399'
                            }
                        }).on('circle-animation-progress', function (event, progress, stepValue) {
                            $(this).find('strong').text((stepValue * 100).toFixed(0) + "%");
                        }).stop();
                    }
                });
            }

            animateElements();
            $(window).scroll(animateElements);
        });


    });


    jQuery(window).load(function () {

        /* Sticky Header
        ============================*/
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 20) {
                $('.header-fixed').addClass("sticky");
            } else {
                $('.header-fixed').removeClass("sticky");
            }
        });

        /* Preloader Active
        ============================*/
        $(".preloader").fadeOut()
    });
}(jQuery));