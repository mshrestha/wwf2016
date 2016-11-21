$(document).ready(function() {
  $('.page-container').height( $(window).height() );
  $('.fullHeightImg').height( $(window).height() );
  $('.fullHeight').height( $(window).height() );
  $('.mb_YTVPPlaypause').addClass('active');

  videoContainerHeight();
});

$(window).resize(function() {
  $('.page-container').height( $(window).height() );
  $('.fullHeightImg').height( $(window).height() );
  $('.fullHeight').height( $(window).height() );

  videoContainerHeight();
});

function videoContainerHeight() {
  var window_width = $(window).width();
  var window_height = $(window).height();
  $('.welcome-video').css({
    'height': window_height,
    'width': window_width
  });
}

jQuery(function () {
  //if( $(window).width() > 768 ) {  //check screen size by khp
  if($('html').hasClass('no-touch')) {//video not for touch screens
    
    //bgndVideo
    var myPlayer = jQuery("#bgndVideo").mb_YTPlayer({
      onReady: function (player) {
        YTPConsole.append(player.id + " player is ready");
        YTPConsole.append("<br>");
      }
    });
      /* DEBUG ******************************************************************************************/
    var YTPConsole = jQuery("#eventListener");
    // EVENT: YTPStart YTPEnd YTPLoop YTPPause YTPBuffering
    myPlayer.on("YTPStart YTPEnd YTPLoop YTPPause YTPBuffering", function (e) {
      YTPConsole.append(e.type + " - " + jQuery("#bgndVideo").getPlayer().getPlayerState() + " - time: " + e.time);
      YTPConsole.append("<br>");
    });
    // EVENT: YTPChanged
    myPlayer.on("YTPChanged", function (e) {
      YTPConsole.html("");
    });
    // EVENT: YTPData
    myPlayer.on("YTPData", function (e) {
      YTPConsole.append("******************************");
      YTPConsole.append("<br>");
      YTPConsole.append(e.type);
      YTPConsole.append("<br>");
      YTPConsole.append(e.prop.title);
      YTPConsole.append("<br>");
      YTPConsole.append(e.prop.description.replace(/\n/g, "<br/>"));
      YTPConsole.append("<br>");
      YTPConsole.append("******************************");
      YTPConsole.append("<br>");
    });
    // EVENT: YTPTime
    myPlayer.on("YTPTime", function (e) {
      var currentTime = e.time;
      var player = e.target.wrapper;
      var traceLog = currentTime / 5 == Math.floor(currentTime / 5);
      if (traceLog) {
        YTPConsole.append(e.type + " actual time is: " + currentTime);
        YTPConsole.append("<br>");
      }
    });

    /*myPlayer.on("YTPReady", function (e) {
      jQuery('.mb_YTVPPlaypause').show();
    });*/
    jQuery('#bgndVideo').on("YTPReady",function(e){
      console.log('Ready..');
      jQuery('.mb_YTVPPlaypause').show(); 
    });

  } //if screen size
});

$(window).load(function() {
  setTimeout(function() {
    playPauseIcon();
  }, 2000);
});

function playPauseIcon() {
  $('.mb_YTVPPlaypause').show();

  $('.mb_YTVPPlaypause').click(function() {
    if($(this).text() == 'p') {
      //its playing - so show pause icon to pause it
      $(this).addClass('PauseIcon');
    }
    else {      
      //paused - so remove pause icon
      $(this).removeClass('PauseIcon');
    }
  });
}