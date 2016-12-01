		<img src="img/communications/international-mountain-day1<?php echo get_small_image();?>.jpg" class="hidden">
		<div id="communications-mountain-day-popup" class="popup-wrap scrollbar-outer-div" style="position: fixed; height: 100%; width: 100%;top: 0; left: 0; z-index: 999;">
    		<?php copyright('WWF Nepal');?>
	        <?php
	        $popup_communications_section_current = 1;

	        popup_navigation($popup_communications_section[$popup_communications_section_current-1], $popup_communications_section[$popup_communications_section_current+1]);
	        ?>

	    	<div class="article-section" style="background-image: url('img/communications/international-mountain-day1<?php echo get_small_image();?>.jpg'); height: 100%; width: 100%; top: 0; left: 0; z-index: 999;">

	            <div class="section-intro content-txt section-absolute section-bottom box brown-box">
					<h1 class="uppercase">International Mountain Day</h1>
					<p>On the occasion of International Mountain Day, WWF Nepal hosted the premiere of its major production, ‘The Ghost of the Mountains’ – a 24-minute video documentary based on a snow leopard collaring mission in Nepal in late 2014. The premiere was organized in association with the Kathmandu International Mountain Film Festival. ‘The Ghost of the Mountains’ tells the story of a team of Nepali scientists, local community members and conservationists who work together to track and put a satellite collar on a snow leopard in Kangchenjunga Conservation Area. Their mission to apply science to save snow leopards is ultimately about the intricate and inseparable ties that binds the fate of humans with that of the ghost of the mountains.</p>
          			<p><a href="communications-mountain-day-video-popup" class="video-link popup-trigger" id=""><span class="glyphicon glyphicon-play"></span>WATCH VIDEO</a></p>
	            </div>
	    	</div>
		</div>

		<?php
		video_popup('communications-mountain-day', 'fj8RdwNL-NA', 'brown');
		?>