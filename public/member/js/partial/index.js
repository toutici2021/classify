// ===== Bootstrap  Default Carousel ======
$('#homeBannerCarousel').carousel({
    interval: 5000,
});

// ============= Owl Carousel for Brand ==============
$(".brand-owl.owl-carousel").owlCarousel({
    stagePadding: 15,
    loop: false,
    margin: 30,
    responsiveClass: true,
    dots: false,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 3
        },
        758: {
            items: 4
        },
        992: {
            items: 5
        },
        1366: {
            items: 6
        }
    }
});
