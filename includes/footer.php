    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js'></script> -->
    <script src='js/vendor/TweenMax.min.js'></script>
    <!-- Swiper JS -->
    <script src="vendor/Swiper-master/dist/js/swiper.min.js"></script>
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
	
		<script src="js/jquery.animateNumber.min.js"></script>

    <!-- Initialize Swiper -->
    <?php 
    	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
    	if ($isiPad) {
    ?>
    	<!-- for ipad and fixefox -->
    	<script src="js/custom-swiper-effect-disable.js"></script>
    <?php } else { ?>
	    <!-- for other browser -->
	    <script src="js/custom-swiper-effect-enable.js"></script>
    <?php } ?>

    <script src="js/custom-swiper.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>