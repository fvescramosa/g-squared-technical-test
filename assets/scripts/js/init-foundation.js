jQuery(document).foundation();

var $ = jQuery;

$('.hero-image-container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,

    autoplaySpeed:10000,
    fade: true,
    speed: 1500,
    dots: true,
    arrows: false,
    nextArrow: false,
    prevArrow: false,

    adaptiveHeight: true,
    rows: 0,
    swipeToSlide: true,

    dotsClass: 'slick-dots custom-button',
});
