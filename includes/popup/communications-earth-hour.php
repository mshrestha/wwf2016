		<img src="img/communications/earth-hour<?php echo get_small_image();?>.jpg" class="hidden">
		<div id="communications-earth-hour-popup" class="popup-wrap scrollbar-outer-div" style="position: fixed; height: 100%; width: 100%;top: 0; left: 0; z-index: 999;">
    		<?php copyright('WWF Nepal');?>
	        <?php
	        $popup_communications_section_current = 2;

	        popup_navigation($popup_communications_section[$popup_communications_section_current-1], $popup_communications_section[$popup_communications_section_current+1]);
	        ?>
    	<div class="article-section" style="background-image: url('img/communications/earth-hour<?php echo get_small_image();?>.jpg'); min-height: 100%; width: 100%; top: 0; left: 0; z-index: 999;">
            <div class="section-intro content-txt section-absolute section-bottom box brown-box">
                <h1 class="uppercase">Earth Hour</h1>
                <p>Earth Hour was marked in Nepal by shining 4,000 lights on climate action. Through an event organized in Basantapur, one of the UNESCO World Heritage Sites, WWF Nepal organized a candle light vigil and used the medium of spoken word through three young Nepali slam poets to talk about climate change and encourage climate action. Nepal joined more than 170 countries across the world in a unified act to shine a light on climate action through this year’s Earth Hour celebrations. Supporters in Nepal also shared their commitment to the planet by donating their Facebook feeds and social media profile pictures to Earth Hour to inspire their friends and communities to join the movement.</p>
          		<p><a href="communications-earth-hour-video-popup" class="video-link popup-trigger" id=""><span class="glyphicon glyphicon-play"></span>WATCH VIDEO</a></p>
            </div>
    	</div>
	</div>

	<?php
	video_popup('communications-earth-hour', '8yKkFPqwHCU', 'brown');
	?>