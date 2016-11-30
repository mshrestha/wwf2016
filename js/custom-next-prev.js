$(document).keyup(function(e) {
  if (e.keyCode == 37) {
    // console.log('key pressed right');
    for (i=0; i < $('.previous-story').length; i++){ 
      if ($($('.previous-story')[i]).is(":visible")) { 
        $($('.previous-story')[i]).trigger("click"); 
      } 
    }
  }
  if (e.keyCode == 39) {
    // console.log('key pressed right');
    for (i=0; i < $('.next-story').length; i++){ 
      if ($($('.next-story')[i]).is(":visible")) { 
        $($('.next-story')[i]).trigger("click"); 
      } 
    }
  }
});