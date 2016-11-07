/*//Main Swiper
var swiper = new Swiper('.swiper-container', {
    hashnav: true,
    hashnavWatchState: true,
    replaceState: true,
    // pagination: '.swiper-pagination',
    // paginationClickable: true,
    // nextButton: '.swiper-button-next',
    // prevButton: '.swiper-button-prev',
    keyboardControl: true,
    mousewheelControl: true,
    speed: 1200,
    parallax: true,
    effect: 'coverflow',
    coverflow: {
      rotate: 25,
      stretch: 0,
      depth: 10,
      modifier: 2,
      slideShadows : false,
    },
  touchEventsTarget: 'container',
  onSlideChangeStart(swiper) {
    // console.log('changed');
    $('.swiper-pagination-bullet').removeClass('swiper-pagination-bullet-active');

    if( $('.swiper-slide-active').hasClass('slide-wildlife') ) {
      $('.swiper-pagination-bullet.menu-icon-wildlife').addClass('swiper-pagination-bullet-active');
    }
    make_custom_pagination_active('wildlife');
    make_custom_pagination_active('forests');
    make_custom_pagination_active('climate-change');
    make_custom_pagination_active('water');
    make_custom_pagination_active('communications');
    make_custom_pagination_active('financial');
  }
});*/

function make_custom_pagination_active(swiper_slide_class) {
  if( $('.swiper-slide-active').hasClass('slide-'+swiper_slide_class) ) {
    $('.swiper-pagination-bullet.menu-icon-'+swiper_slide_class).addClass('swiper-pagination-bullet-active');
  }
}