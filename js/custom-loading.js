/* 
 * Custom Loading jQuery For WWF Annual Report
 * By Nikesh Ulak, Kazi Studios
 */
$(document).ready(function() {
    $('.loading-wrapper').addClass('hidden');
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

// $( window ).load(function() {
//   // Run code after window loads completely - hide the loading
//   $('.loading-wrapper').addClass('hidden');
// });