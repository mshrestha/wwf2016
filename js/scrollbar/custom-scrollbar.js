$(document).ready(function(){
    

    var win_height = $(window).height();
    var win_width = $(window).width();

    if (win_width >= 992) {
        $('.scrollbar-div').scrollbar();
        $('.popup-wrap > .scrollbar-inner-div > .scrollbar-div, .article-section').css({//.scrollbar-div, 
        	'min-height': win_height + 'px',
        	'max-height': win_height + 'px',
        });
    }else{
        $('.popup-wrap > .scrollbar-inner-div > .scrollbar-div, .article-section').css({//.scrollbar-div, 
            'min-height': win_height + 'px',
        });
    }

    $('.section-absolute > .scrollbar-inner-div > .scrollbar-div').css({//.scrollbar-div, 
    	'min-height': 400 + 'px',
    	'max-height': 400 + 'px',
    });
});

$(window).resize(function(){
    var win_height = $(window).height();
    var win_width = $(window).width();

    if (win_width >= 992) {
        $('.scrollbar-div').scrollbar();
        $('.popup-wrap > .scrollbar-inner-div > .scrollbar-div, .article-section').css({//.scrollbar-div, 
            'min-height': win_height + 'px',
            'max-height': win_height + 'px',
        });
    }else{
        $('.popup-wrap > .scrollbar-inner-div > .scrollbar-div, .article-section').css({//.scrollbar-div, 
            'min-height': win_height + 'px',
            'max-height': 'auto',
        });
    }    
});