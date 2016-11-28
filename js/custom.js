$(window).resize(function() {
	// var winWidth = $(window).width();
	// var slideWidth = winWidth - 30;
	// $('.swiper-slide').width(slideWidth);
});
$(document).ready(function() {		
	//initialize all number animate with 0
	$('.numbAni').text('0');

	$('.window-height').height($(window).height());

	//var tl = new TimelineMax();
	// var introContent = $('.section-intro');
	var animateGroup = $('.animate-visible');
	// tl.to(animateGroup, 0, {ease: Power4.easeInOut, y: '50px', opacity:0}, '0');

	// close animate
	var closeBtn = $('.popup-close');
	var tl = new TimelineMax();
	tl.to(closeBtn, 0, {ease: Power4.easeInOut, y: '-10px', opacity:0, display: 'none'}, '0');

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
		var article_location = $(this).attr('href');
		/*var currentId = this.id;*/
		currentId = article_location;


		// var introContent = $('.section-intro');
		// var currentContent = $('#'+currentId+'-popup').find('.animate-visible');

		// tgg-popup popup-wrap popup-close
		// tl.to($('#'+currentId+'-popup'), 1, {display: 'block', top: 0, opacity:1});
		
		//view particular section of same popup

		tl.to($('.swiper-container .swiper-slide-active'), 2, {ease: Power4.easeOut, y: '-200px', opacity:0});//y = -200px
		// tl.to($('#'+currentId+'-popup'), 2, {ease: Power4.easeInOut, y: '0px', opacity:1, display: 'block'}, '0.2');
		
		/*tl.to($('.article-section').not('#'+article_location), 0, {opacity:0}, '0');*/

		tl.to($('#'+currentId), 2, {ease: Power4.easeInOut, y: '0px', opacity:1, display: 'block'}, '0.2');

		/*tl.to($('#'+currentId+'-popup .scrollbar-div'), 0, {scrollTo:{y: "#"+article_location}, ease:Power2.easeOut});
		tl.to($('.article-section'), 0, {opacity:1}, '4.5');*/

		// tl.to(window, 2, {scrollTo:{y:"#someID", offsetY:50}});

		// tl.fromTo(introContent, 1, {css: {top: "50px", opacity: 0}}, {css:{top: "0px", opacity: 1}});
		// tl.to(introContent, 2, {ease: Expo.easeOut, y: '0px', opacity:1}, '1.6');
		// tl.to(currentContent, 2, {ease: Power4.easeOut, y: '0px', opacity:1, display: 'block'}, '1.5');


		tl.to(closeBtn, 1, {ease: Power4.easeInOut, y: '0px', opacity:1, display: 'block'}, '0.2');

		$('.popup-wrap#'+currentId).addClass('popup-active');

		/*setTimeout(function() {
			animateNumber();
		}, 2000);*/

		//pause video if popup opened
		if($('.mb_YTVPPlaypause').text() == 'p') {
			//if playing
	        $('.mb_YTVPPlaypause').trigger('click');
	    }
    
	});

	// popup close button
	$('.popup-close').click(function() {
		$('.popup-wrap').removeClass('popup-active');//remove popup-active from all other

		$('body').removeClass('popupAcitve');
		// $('.popup-wrap').
		var tl = new TimelineMax();
		var popup = $('.popup-wrap');
		var closeBtn = $('.popup-close');
		var prevBtn = $('.previous-story');
		var nxtBtn = $('.next-story');
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
	// slide_menu_click_trigger('policy');
	slide_menu_click_trigger('communication');
	slide_menu_click_trigger('financials');

	// slide_menu_click_trigger('acknowledgement');
	reverse_slide_menu_click_trigger('wwf-nepal');
	reverse_slide_menu_click_trigger('message');
	reverse_slide_menu_click_trigger('financial');
	reverse_slide_menu_click_trigger('acknowledgement');

	// share button 
	TweenMax.staggerTo($('.share-icon-list'), 0, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0);
	$('.icon-share').click(function() {
		if ($(this).hasClass('on')) {
			TweenMax.staggerTo($('.share-icon-list'), 0.5, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0.1);
	  		$(this).removeClass('on');
	  		TweenMax.staggerTo($('#contact-info-wrap'), 0.5, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0.1);
	  		$('#contact-toggle').removeClass('on');
		}else{
	  		TweenMax.staggerTo($('.share-icon-list'), 0.5, {opacity:1, display:'block', y:0, ease:Back.easeIn}, 0.1);
	  		$(this).addClass('on');
		}
	});

	// TweenMax.staggerTo($('.share-icon-list'), 0, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0);
	  		
	TweenMax.staggerTo($('#contact-info-wrap'), 0.5, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0.1);
	$('#contact-toggle').click(function() {
		if ($(this).hasClass('on')) {			
			TweenMax.staggerTo($('#contact-info-wrap'), 0.5, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0.1);
	  		$(this).removeClass('on');
		}else{
	  		TweenMax.staggerTo($('#contact-info-wrap'), 0.5, {opacity:1, display:'block', y:0, ease:Back.easeIn}, 0.1);
	  		$(this).addClass('on');
		}

		// $('#contact-info-wrap').
	});
});

$(document).on('click', function (e) {
//closing the opened share icon list and contact info on document click
  if ($(e.target).closest(".share-icon-list #contact-toggle").length === 0) {
	TweenMax.staggerTo($('#contact-info-wrap'), 0.5, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0.1);
	$('.share-icon-list #contact-toggle').removeClass('on');
  }
  if ($(e.target).closest(".icon-share, .menu-share-this").length === 0) {
	TweenMax.staggerTo($('.share-icon-list'), 0.5, {opacity:0, display:'none', y:30, ease:Back.easeIn}, 0.1);
	$('.icon-share').removeClass('on');
  }
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


// doesn't work after all article in single popup
/*function animateNumber() {
	if( $('#wildlife-zero-poaching-popup').hasClass('popup-active') ) {
    zeroPoachingnumbers();
  } else {
    $('.numbAni').text('0');
  }	
}*/
var zero_poaching_animated = 0;
$('#infographics-zero-poaching').bind('inview', function(event, visible) {
	zero_poaching_animated += 1;
	if (visible) {
		if(zero_poaching_animated == 1) {
			zeroPoachingNumbers();
			// console.log('zero poacing animated once');
		}
	} else {
    	//$('.numbAni').text('0');
	}
});

var corridors_management_animated = 0;
$('#infographics-corridors-management').bind('inview', function(event, visible) {
	corridors_management_animated += 1;
	if (visible) {
		if(corridors_management_animated == 1) {
			corridorsManagementNumbers();
			// console.log('corridors management animated once');
		}
	} else {
	}
});

var habitat_management_animated = 0;
$('#infographics-habitat-management').bind('inview', function(event, visible) {
	habitat_management_animated += 1;
	if (visible) {
		if(habitat_management_animated == 1) {
			habitatManagementNumbers();
			// console.log('corridors management animated once');
		}
	} else {
	}
});

var sustainable_agricuture_animated = 0;
$('#infographics-sustainable-agriculture').bind('inview', function(event, visible) {
	sustainable_agricuture_animated += 1;
	if (visible) {
		if(sustainable_agricuture_animated == 1) {
			sustainableAgricultureNumbers();
			// console.log('corridors management animated once');
		}
	} else {
	}
});

function zeroPoachingNumbers() {
  // animated number
  $('#poachersNumber').animateNumber(
  	{ 
    number: 223
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
              number: 920
            },
            function() 
            {
              $('#youthNumber').animateNumber(
                {
                  number: 1200
                },
                function() 
                {
                  $('#canineNumber').animateNumber(
                    {
                      number: 4
                    },
                    function() {
                      $('#tigerNumber').animateNumber({number: 11});
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

function corridorsManagementNumbers() {
  // animated number
  $('#fireLineNumber').animateNumber(
  	{ 
    number: 240
    },
    function() 
    {
      $('#grasslandNumber').animateNumber(
        {
          number: 505
        },
        function()
        {
          $('#communityForestNumber').animateNumber(
            {
              number: 3600
            },
            function() 
            {
              $('#operationPlanNumber').animateNumber(
                {
                  number: 43
                },
                function() {
                	$('#forestRestoredNumber').animateNumber(
                		{
                			number: 334
                		},
                		function() {
                			$('#waterholesNumber').animateNumber(
	                			{
	                				number: 16	
	                			}
            				)
                		}
            		)
                }
              );//#operationPlanNumber ends
            }
          );//#fireLineNumber
		}
  		);//#grasslandNumber
	}
  );//end #communityForestNumber
}

function habitatManagementNumbers() {
  // animated number
  $('#habitatFirelineNumber').animateNumber(
  	{ 
    number: 262
    },
    function() 
    {
      $('#habitatGrasslandNumber').animateNumber(
        {
          number: 255
        },
        function()
        {
          $('#habitatWetlandNumber').animateNumber(
            {
              number: 9 
            }
          );//#fireLineNumber
		}
  		);//#grasslandNumber
	}
  );//end #communityForestNumber
}
function sustainableAgricultureNumbers() {
  // animated number
  $('#polyhousesNumber').animateNumber(
  	{ 
    number: 238
    },
    function() 
    {
      $('#pondsNumber').animateNumber(
        {
          number: 17
        },
        function()
        {
          $('#householdNumber').animateNumber(
            {
              number: 9 
            },
            function() {
            	$('#irrigationNumber').animateNumber({ number: 32 })
            }
          );//#fireLineNumber
		}
  		);//#grasslandNumber
	}
  );//end #communityForestNumber
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
			tl.to(line1, 0.7, {transformOrigin:'0% 0%', rotation: "0", ease:Back.easeIn}, '0.1');
			tl.to(line3, 0.7, {transformOrigin:'left', rotation: "0", ease:Back.easeIn}, '0.2');
			tl.to(line2, 0.3, {opacity: 1, ease:Back.easeIn}, '1');
			smMenuToggle.removeClass('on');
		}else{
			var tl = new TimelineMax();
			tl.to(smMenu, 0, {opacity:0, display:'none', y:-30, ease:Back.easeIn});
			tl.to(smMenu, 0.7, {opacity:1, display:'block', y:0, ease:Back.easeIn});

			tl.to(line2, 0.3, {opacity: 0, ease:Back.easeIn}, '0.1');
			tl.to(line1, 0.7, {transformOrigin:'0% 0%', rotation: "35", ease:Back.easeIn}, '0.1');
			tl.to(line3, 0.7, {transformOrigin:'left', rotation: "-35",  ease:Back.easeIn}, '0.2');
			smMenuToggle.addClass('on');
		}
	});
});