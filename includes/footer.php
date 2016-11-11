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
		}
		if (strlen(strstr($agent, 'Firefox')) > 0) {
		    $browser = 'firefox';
		}

    	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    	if ($isiPad) {
    ?>
    	<!-- for ipad and fixefox -->
    	<script src="js/custom-swiper-effect-disable.js"></script>
    <?php }
    elseif ($browser == 'firefox') {
    ?>
    	<!-- for ipad and fixefox -->
    	<script src="js/custom-swiper-effect-disable.js"></script>
    <?php }
     else { ?>
	    <!-- for other browser -->
	    <script src="js/custom-swiper-effect-enable.js"></script>
    <?php } ?>

    <script src="js/custom-swiper.js"></script>
    <script src="js/custom.js"></script>

    <!-- custom scrollbar stylesheet -->
    <!-- //cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js
//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css
//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/mCSB_buttons.png -->

	<!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css"> -->
	 <!-- custom scrollbar plugin  -->
	<!-- <script src="//cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js"></script> -->
	<style>
		
	</style>
	<script>
	</script>
	<!-- <script src="vendor/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script> -->


    <!-- <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.css">
	 custom scrollbar plugin 
	<script src="../jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="vendor/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script> -->

	<!-- <script>
		(function($){
			$(window).on("load",function(){
				
				$("body").mCustomScrollbar({
					theme:"minimal"
				});
				
			});
		})(jQuery);
	</script> -->

    

</body>
</html>