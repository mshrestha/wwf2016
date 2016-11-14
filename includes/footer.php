    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js'></script> -->
    <script src='js/vendor/greensock-js/src/minified/TweenMax.min.js'></script>
    <script src='js/vendor/greensock-js/src/minified/plugins/ScrollToPlugin.min.js'></script>
    <!-- Swiper JS -->
    <script type="text/javascript">
    	function make_custom_pagination_active(swiper_slide_class) {
		  if( $('.swiper-slide-active').hasClass('slide-'+swiper_slide_class) ) {
		    $('.swiper-pagination-bullet.menu-icon-'+swiper_slide_class).addClass('swiper-pagination-bullet-active');
		  }
		}

		function trigger_make_custom_pagination_active() {
			$('.swiper-pagination-bullet').removeClass('swiper-pagination-bullet-active');
		    // if( $('.swiper-slide-active').hasClass('slide-wildlife') ) {
		    //   $('.swiper-pagination-bullet.menu-icon-wildlife').addClass('swiper-pagination-bullet-active');
		    // }
		    make_custom_pagination_active('wildlife');
		    make_custom_pagination_active('forests');
		    make_custom_pagination_active('climate-change');
		    make_custom_pagination_active('water');
		    make_custom_pagination_active('policy');
		    make_custom_pagination_active('communications');
		    make_custom_pagination_active('financial');
	    }
    </script>
    <script src="vendor/Swiper-master/dist/js/swiper.modified.js"></script>
    <!-- <script src="../dist/js/swiper.min.js"></script> -->

    <!-- custom scrollbar plugin -->
	<!-- <script src="vendor/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.js"></script> -->
	<!-- <script src="../jquery.mCustomScrollbar.concat.min.js"></script> -->
	<!-- <script>
		(function($){
			$(window).on("load",function(){
				
				$(".popup-wrap").mCustomScrollbar({
					// theme:"minimal"
				});
				
			});
		})(jQuery);
	</script> -->
	
	<script src="js/jquery.inview.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>

    <!-- Initialize Swiper -->
    <?php 

    	if (isset($_SERVER['HTTP_USER_AGENT'])) {
		    $agent = $_SERVER['HTTP_USER_AGENT'];

			print_r('aaa'.$agent);
		}
		if (strlen(strstr($agent, 'Firefox')) > 0) {
		    $browser = 'firefox';
		}
		if (strlen(strstr($agent, 'Safari')) > 0) {
		    $browser = 'safari';
		}

    	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    	if ($isiPad) {
    ?>
    	<!-- for ipad and fixefox -->
    	<script src="js/custom-swiper-effect-disable.js"></script>
    <?php }
    elseif ($browser == 'firefox' || $browser == 'safari') {
    ?>
    	<!-- for ipad and fixefox -->
    	<script src="js/custom-swiper-effect-disable.js"></script>
    <?php }
     else { ?>
	    <!-- for other browser -->
	    <script src="js/custom-swiper-effect-enable.js"></script>
    <?php } ?>

	<!-- custom scrollbar plugin -->
	<!-- <script src="../jquery.mCustomScrollbar.concat.min.js"></script> -->
	<!-- <script src="vendor/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).on("load",function(){
				
				$("body").mCustomScrollbar({
					theme:"minimal"
				});
				
			});
		})(jQuery);
	</script> -->

    <script src="js/custom-swiper.js"></script>
    <script src="js/custom.js"></script>

    <script src="js/scrollbar/jquery.scrollbar.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
	    $('.scrollbar-div').scrollbar();
	    var win_height = $(window).height();

	    $('.scrollbar-div, .article-section').css({//.scrollbar-div, 
	    	'min-height': win_height + 'px',
	    	'max-height': win_height + 'px',
	    });
	});
	</script>

</body>
</html>