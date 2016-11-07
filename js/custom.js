$(document).ready(function() {		
	//initialize all number animate with 0
	$('.numbAni').text('0');

	$('.window-height').height($(window).height());

	var tl = new TimelineMax();
	// var introContent = $('.section-intro');
	var animateGroup = $('.animate-visible');
	// tl.to(animateGroup, 0, {ease: Power4.easeInOut, y: '50px', opacity:0}, '0');

	// pop up trigger
	$('.popup-trigger').click(function(event) {		
		$('.popup-wrap').removeClass('popup-active');//remove popup-active from all other
		$('.popup-close').trigger('click');//close all open popup first

		var closeBtn = $('.popup-close');
		// var popupNav = $('.popup-navigation');
		event.preventDefault();
		$('body').addClass('popupAcitve');
		var tl = new TimelineMax();
		var popupTrigger = $('.popup-trigger');
		// alert(this.id);
		var currentId = this.id;
		// var introContent = $('.section-intro');
		// var currentContent = $('#'+currentId+'-popup').find('.animate-visible');

		// tgg-popup popup-wrap popup-close
		// tl.to($('#'+currentId+'-popup'), 1, {display: 'block', top: 0, opacity:1});
		tl.to($('.swiper-container .swiper-slide-active'), 2, {ease: Power4.easeOut, y: '-200px', opacity:0});
		tl.to($('#'+currentId+'-popup'), 2, {ease: Power4.easeInOut, y: '0px', opacity:1, display: 'block'}, '0.2');
		// tl.fromTo(introContent, 1, {css: {top: "50px", opacity: 0}}, {css:{top: "0px", opacity: 1}});
		// tl.to(introContent, 2, {ease: Expo.easeOut, y: '0px', opacity:1}, '1.6');
		// tl.to(currentContent, 2, {ease: Power4.easeOut, y: '0px', opacity:1, display: 'block'}, '1.5');


		tl.to(closeBtn, 1, {ease: Power4.easeInOut, y: '0px', opacity:1, display: 'block'}, '0.2');

		$('.popup-wrap#'+currentId+'-popup').addClass('popup-active');

		setTimeout(function() {
			animateNumber();
		}, 2000);
    
	});

	// popup close button
	$('.popup-close').click(function() {
		$('.popup-wrap').removeClass('popup-active');//remove popup-active from all other

		$('body').removeClass('popupAcitve');
		// $('.popup-wrap').
		var tl = new TimelineMax();
		var popup = $('.popup-wrap');
		var closeBtn = $('.popup-close');
		// var popupNav = $('.popup-navigation');

		tl.to(popup, 2, {ease: Power4.easeInOut, y: '100px', opacity:0, display: 'none'}, '0');

		// tl.to(popup, 1, {display: 'none', opacity: 0});
		// tl.to($('.swiper-container .swiper-slide-active'), 1, {top: 0, opacity:1}, '0');
		tl.to($('.swiper-container .swiper-slide-active'), 2, {ease: Power4.easeOut, y: '0', opacity:1}, '1.5');
		// tl.to(closeBtn, 1, {ease: Power4.easeInOut, y: '-10px', opacity:0, display: 'none'}, '0.2');
		// tl.to(popupNav, 1, {ease: Power4.easeInOut, y: '-10px', opacity:0, display: 'none'}, '0.2');
		// tl.to($('.animate-visible'), 0, {ease: Power4.easeInOut, y: '0px', opacity:0, display: 'none'}, '3');
	});

	// click on dashboard images
	// slide_menu_click_trigger('message');
	// slide_menu_click_trigger('wildlife');

	slide_menu_click_trigger('forest');
	slide_menu_click_trigger('climate-change');
	slide_menu_click_trigger('water');
	slide_menu_click_trigger('communication');
	slide_menu_click_trigger('financials');

	// slide_menu_click_trigger('acknowledgement');
	reverse_slide_menu_click_trigger('wwf-nepal');
	reverse_slide_menu_click_trigger('message');
	reverse_slide_menu_click_trigger('policy');
	reverse_slide_menu_click_trigger('financial');

	// share button 
	$('.menu-share-this').hover(function() {
	  TweenMax.staggerTo($('.share-icon-list'), 0.5, {opacity:1, display:'block', y:0, ease:Back.easeIn}, 0.1);
	}, function() {
		TweenMax.staggerTo($('.share-icon-list'), 0.5, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0.1);
	});
});

function slide_menu_click_trigger(section_class) {
	/*$('.box.box-' + section_class).click(function() {
		$('.menu-icon-' + section_class).trigger('click');
	});*/
}

function reverse_slide_menu_click_trigger(section_class) {
	$('.menu-icon-' + section_class).click(function() {
		$('.box.box-' + section_class).trigger('click');
		// console.log('clicked'+section_class);

		$('#'+section_class).trigger('click');//find on dashboard
	});
}

$(document).keyup(function(e) {
  if (e.keyCode == 27) { // escape key maps to keycode `27`
  	//close the popup
  	$('.popup-close').trigger('click');
  }
});


function animateNumber() {
	if( $('.popup-wrap#wildlife-zero-poaching-popup').hasClass('popup-active') ) {
    zeroPoachingnumbers();
  } else {
    $('.numbAni').text('0');
  }	
}

function zeroPoachingnumbers() {
  // animated number
  $('#poachersNumber').animateNumber(
  	{ 
    number: 223
    },
    function() 
    {
      $('#tigerNumber').animateNumber(
        {
          number: 11
        },
        function()
        {
          $('#crimeControlNumber').animateNumber(
            {
              number: 22
            },
            function() 
            {
              $('#antiPoachingNumber').animateNumber(
                {
                  number: 920000
                },
                function() 
                {
                  $('#youthNumber').animateNumber(
                    {
                      number: 1200
                    },
                    function() {
                      $('#canineNumber').animateNumber({number: 4});
                    }
                  );//#youthNumber ends
                }
            	);//#antiPoachingNumber ends
            }
          );//#crimeControlNumber
    		}
  		);//#tigerNumber
		}
	);//end #poachersNumber
}

// financial animate
$(document).ready(function() {
	var tl = new TimelineMax();
	var svg = $('#financial-popup').find('svg');

	tl.staggerTo(svg, 0.5, {opacity:1, ease:Back.easeIn}, 1);

	// hover animate
	$('.icon-inner svg').hover(function() {
		$(this).parents('.icon-outer').addClass('on');
	},function() {
		$('.icon-outer').removeClass('on');
	});
});

$(document).ready(function() {
		var smMenuToggle = $('.sm-menu-toggle');
		var smMenu = $('.sm-pagination');
		var line1 = $('.sm-menu-toggle .line1');
		var line2 = $('.sm-menu-toggle .line2');
		var line3 = $('.sm-menu-toggle .line3');

	smMenuToggle.click(function() {
		if (smMenuToggle.hasClass('on')) {
			var tl = new TimelineMax();
			tl.to(smMenu, 1, {opacity:0, display:'none', y:-30, ease:Back.easeIn});
			tl.to(smMenu, 1, {opacity:0, display:'none', y:-30, ease:Back.easeIn});
			tl.to(line1, 1, {transformOrigin:'0% 0%', rotation: "0", ease:Back.easeIn}, '0.1');
			tl.to(line3, 1, {transformOrigin:'left', rotation: "0", ease:Back.easeIn}, '0.2');
			tl.to(line2, 0.3, {opacity: 1, ease:Back.easeIn}, '1');
			smMenuToggle.removeClass('on');
		}else{
			var tl = new TimelineMax();
			tl.to(smMenu, 0, {opacity:0, display:'none', y:-30, ease:Back.easeIn});
			tl.to(smMenu, 1, {opacity:1, display:'block', y:0, ease:Back.easeIn});

			tl.to(line2, 0.3, {opacity: 0, ease:Back.easeIn}, '0.1');
			tl.to(line1, 1, {transformOrigin:'0% 0%', rotation: "35", ease:Back.easeIn}, '0.1');
			tl.to(line3, 1, {transformOrigin:'left', rotation: "-35",  ease:Back.easeIn}, '0.2');
			smMenuToggle.addClass('on');
		}
	});
});