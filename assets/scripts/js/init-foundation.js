// jQuery(document).foundation();

var $ = jQuery;

/*
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
*/

const app = {
    init: function (){
        // app.animateBar();
        app.donationValueSync($('input[name="donation"]'));
        app.animateDonation($('#donationAmount'), 100, 999);
    },

    animateBar: function () {
        var elem = $(".donations-progress");
        var currentVal = parseInt($(".donations-bar").data("current"));
        var maxVal = parseInt($(".donations-bar").data("max"));
        var percentage = (currentVal / maxVal) * 100;

        console.log(percentage);
        var width = 0;

        elem.css("width", percentage + "%");


    },

    animateDonation: function (trigger, duration, step) {
        let end = trigger.data('current');
        let start = 0;

        let range = end - start;
        let current = start;
        let increment = end > start ? 1 : -1;
        let stepTime = Math.abs(Math.floor(duration / (range / step)));
        let elem = $(".donations-progress");
        let maxVal = parseInt($(".donations-bar").data("max"));


        let timer = setInterval(function () {
            current += increment * step;


            var percentage = (current / maxVal) * 100;
            elem.css("width", percentage + "%");


            let formattedNumber = current.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            trigger.text('$ ' + formattedNumber);

            if ((increment === 1 && current >= end) || (increment === -1 && current <= end)) {
                let formattedEnd = end.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                trigger.text('$ ' + formattedEnd); // Ensure the final value is set correctly
                clearInterval(timer);
            }
        }, stepTime);
    },
    donationValueSync: function (trigger){
        trigger.on('keyup', function (){
            var donation = $(this).val();


            $('input[name="donation"]').val(donation)
        });
    }







}

app.init();