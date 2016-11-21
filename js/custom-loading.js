/* 
 * Custom Loading jQuery For WWF Annual Report
 * By Nikesh Ulak, Kazi Studios
 */

/* Align swiper slider vertically center */
function swiper_valign() {
    var win_width = $(window).width();
    var win_height = $(window).height();
    var swiper_padding_top;

    if(win_width >= 768) {
        var swiper_height = $('.dashboard-height').innerHeight();

        swiper_padding_top = (win_height - swiper_height)/2;
    } else {
        swiper_padding_top = 80;//as in custom css
    }
    // console.log(win_height + '-' + swiper_padding_top);

    $('.swiper-wrapper').css({
        'padding-top': swiper_padding_top + 'px',
    });

    //minus the same padding as top position for video
    $('.welcome-video').css({
        'top': '-' + swiper_padding_top + 'px',
    });
}

$(document).ready(function() {
    //$('.loading-wrapper').addClass('hidden');
    moveAnimateLeft();

    function moveAnimateLeft() {
        var winWidth = $(window).width();

        $('.loading-move').animate({
            marginLeft: winWidth+"px"
        }, 8000, function() {
            $('.loading-move').css({marginLeft: -winWidth+"px"});//-497px
            moveAnimateLeft();
        });//1sec = 1000ms  
    }
});

$( window ).load(function() {
    // Run code after window loads completely - hide the loading
    $('.loading-wrapper').addClass('hidden');
    $('body > .loading').addClass('hidden');

    swiper_valign();
});
$( window ).resize(function() {
    swiper_valign();
});