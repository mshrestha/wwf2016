$(document).ready(function(){
    $('.scrollbar-div').scrollbar();

    var win_height = $(window).height();

    $('.popup-wrap > .scrollbar-inner-div > .scrollbar-div, .article-section').css({//.scrollbar-div, 
    	'min-height': win_height + 'px',
    	'max-height': win_height + 'px',
    });

    $('.section-absolute > .scrollbar-inner-div > .scrollbar-div').css({//.scrollbar-div, 
    	'min-height': 400 + 'px',
    	'max-height': 400 + 'px',
    });
});