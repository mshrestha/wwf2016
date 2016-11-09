<?php include('includes/header.php');?>

	<div class="fixed-content">		
	    <!-- Swiper -->
	    <div class="swiper-container">
	         
	        <div class="parallax-bg" id="parallaxbg" style="background-image:url('img/bg-blur.jpg')" data-swiper-parallax="-23%" ></div>
	       
	        <div class="swiper-wrapper">	        	
	        	<?php include('includes/swiper-slide/slide-home.php');?>
	        	<?php include('includes/swiper-slide/slide-dashboard.php');?>

	        	<?php /*
            <div class="swiper-slide " style="display: none;"><!-- swiper-no-swiping -->
            	<div class="container-fluid fluid-fixed">
	                <div class="title" data-swiper-parallax="-100">ABOUT WWF NEPAL</div>
	                <div class="box-wrap rm-col-padding">
	                	This will be hidden. It will be shown in popup.
	                	Also Contains Regional and Acknowledgement.
	                </div><!-- /.box-wrap -->
                </div>
            </div> <!-- about-wwf .swiper-slide end -->

            <div class="swiper-slide" style="display: none;">
            	<div class="container-fluid fluid-fixed">
	                <div class="title" data-swiper-parallax="-100">Message</div>
	                <div class="box-wrap rm-col-padding">
	                	This will be hidden. It will be shown in popup.
	                </div><!-- /.box-wrap -->
                </div>
            </div> <!-- about-wwf .swiper-slide end -->
            */ ?>
            

	        	<?php include('includes/swiper-slide/slide-wildlife.php');?>

	        	<?php include('includes/swiper-slide/slide-forests.php');?>
	        	<?php include('includes/swiper-slide/slide-climate-change.php');?>
	        	<?php include('includes/swiper-slide/slide-water.php');?>

	        	<?php /*
            <div class="swiper-slide">
            	<div class="container-fluid fluid-fixed">
	                <div class="title" data-swiper-parallax="-100">POLICY</div>
	                <div class="box-wrap rm-col-padding">
	                	This will be hidden. It will be shown in popup.
	                </div><!-- /.box-wrap -->
                </div>
            </div> <!-- policy .swiper-slide end -->
            */ ?>

	        	<?php include('includes/swiper-slide/slide-communications.php');?>

	        	<?php /*
            <div class="swiper-slide">
            	<div class="container-fluid fluid-fixed">
	                <div class="title" data-swiper-parallax="-100">FINANCIAL SUMMARY</div>
	                <div class="box-wrap rm-col-padding">
	                	This will be hidden. It will be shown in popup.
	                </div><!-- /.box-wrap -->
                </div>
            </div> <!-- about-wwf .swiper-slide end -->
            */ ?>

	        </div> <!-- /.swiper-wrapper -->

			<div class="visible-sm visible-xs sm-menu-toggle"><span class="line1"></span> <span class="line2"></span> <span class="line3"></span></div>
			<div class="hidden-lg hidden-md sm-pagination swiper-pagination custom-pagination">
	        	<span class="swiper-pagination-bullet menu-icon-message">
			      		<img src="img/icons/icon-message.png" alt="" />
			      		Message
			      		<span class="icon-border"></span>		      		
		      	</span>
	        	<span class="swiper-pagination-bullet menu-icon-wwf-nepal">	        			        		
			      		<img src="img/icons/icon-nepal.png" alt="" />
			      		WWF Nepal
			      		<span class="icon-border"></span>		      		
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-wildlife">
		        	<a href="#slide-wildlife">
			      		<img src="img/icons/icon-wildlife.png" alt="" />
			      		Wildlife
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-forests">
		        	<a href="#slide-forests">
			      		<img src="img/icons/icon-forest.png" alt="" />
			      		Forest
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-climate-change">
		        	<a href="#slide-climate-change">
			      		<img src="img/icons/icon-climate-change.png" alt="" />
			      		Climate Change
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-water">
		        	<a href="#slide-water">
			      		<img src="img/icons/icon-water.png" alt="" />
			      		Water
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-policy">		        	
			      		<img src="img/icons/icon-policy.png" alt="" />
			      		Policy
			      		<span class="icon-border"></span>			      	
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-communications">
		        	<a href="#slide-communications">
			      		<img src="img/icons/icon-communication.png" alt="" />
			      		Communications
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-financial">		        	
			      		<img src="img/icons/icon-financials.png" alt="" />
			      		Financial
			      		<span class="icon-border"></span>			      	
		      	</span>
	      	</div>


        	<div class="hidden-sm hidden-xs swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets custom-pagination">
	        	<span class="swiper-pagination-bullet menu-icon-message">	        		
			      		<img src="img/icons/icon-message.png" alt="" />
			      		<span class="icon-border"></span>		      		
		      	</span>
	        	<span class="swiper-pagination-bullet menu-icon-wwf-nepal">	        			        		
			      		<img src="img/icons/icon-nepal.png" alt="" />
			      		<span class="icon-border"></span>		      		
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-wildlife">
		        	<a href="#slide-wildlife">
			      		<img src="img/icons/icon-wildlife.png" alt="" />
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-forests">
		        	<a href="#slide-forests">
			      		<img src="img/icons/icon-forest.png" alt="" />
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-climate-change">
		        	<a href="#slide-climate-change">
			      		<img src="img/icons/icon-climate-change.png" alt="" />
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-water">
		        	<a href="#slide-water">
			      		<img src="img/icons/icon-water.png" alt="" />
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-policy">		        	
			      		<img src="img/icons/icon-policy.png" alt="" />
			      		<span class="icon-border"></span>			      	
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-communications">
		        	<a href="#slide-communications">
			      		<img src="img/icons/icon-communication.png" alt="" />
			      		<span class="icon-border"></span>
			      	</a>
		      	</span>
		      	<span class="swiper-pagination-bullet menu-icon-financial">		        	
			      		<img src="img/icons/icon-financials.png" alt="" />
			      		<span class="icon-border"></span>			      	
		      	</span>
	      	</div>

	        <div class="menu-text hidden-sm hidden-xs"><a href="#slide-dashboard">MENU</a></div>
        	<?php include('includes/footer-share.php');?>

	        <!-- Add Pagination -->
	        <div class="swiper-pagination swiper-pagination-white"></div>
	        <!-- Add Navigation -->
	        <div class="swiper-button-prev swiper-button-white"></div>
	        <div class="swiper-button-next swiper-button-white"></div>
	    </div> <!-- /.swiper-container -->
    </div> <!-- /.fixed-content -->

  	<!-- popup slides -->
  	<!--<div class="popup-close"><span class="icon-cross"></span></div>-->

		<?php include('includes/popup/wwf-nepal.php');?>
		<?php include('includes/popup/message.php');?>
		<?php include('includes/popup/policy.php');?>
		<?php include('includes/popup/financial.php');?>

		<?php 
		include('includes/popup/wildlife-main.php');
		include('includes/popup/forests-main.php');
		include('includes/popup/climate-change-main.php');
		include('includes/popup/water-main.php');
		?>		

		<?php include('includes/popup/communications-mountain-day.php');?>
		<?php include('includes/popup/communications-tiger-day.php');?>
		<?php include('includes/popup/communications-earth-hour.php');?>
		<?php include('includes/popup/communications-prince-harry.php');?>
		<?php include('includes/popup/communications-tgg.php');?>

<?php include('includes/footer.php');?>