		<img src="img/wildlife/swamp-deer-translocation<?php echo get_small_image();?>.jpg" class="hidden">
		<div id="wildlife-swamp-deer-translocation-popup" class="popup-wrap scrollbar-outer-div" style="position: fixed; height: 100%; width: 100%;top: 0; left: 0; z-index: 999;">
			<?php copyright('WWF Nepal-Hariyo Ban Program/Samir Jung Thapa');?>
	        <?php
	        // var_dump($wildlife_section);
	        $popup_wildlife_section_current = 3;

	        popup_navigation($popup_wildlife_section[$popup_wildlife_section_current-1], $popup_wildlife_section[$popup_wildlife_section_current+1]);
	        ?>
	    	<div class="article-section" style="background-image: url('img/wildlife/swamp-deer-translocation<?php echo get_small_image();?>.jpg'); height: 100%; width: 100%;top: 0; left: 0; z-index: 999;">            
	            <div class="section-intro content-txt section-absolute section-bottom section-right box light-green-box">
	                <h1 class="uppercase">Swamp deer translocation</h1>
	                <p>Five swamp deer were successfully translocated to Bardia National Park from Shuklaphanta Wildlife Reserve in Nepal’s Terai Arc Landscape on 27 May–2 June 2016. Shuklaphanta Wildlife Reserve is the stronghold of Nepal’s swamp deer population presently 2,300 in number. The translocation expedition was carried out to enhance genetic robustness of the remnant swamp deer population of Bardia National Park, and establish a viable population of the species. An additional 30 swamp deer will be translocated between the two national parks till 2018.</p>
	          		<p><a href="wildlife-swamp-deer-translocation-video-popup" class="video-link popup-trigger" id=""><span class="glyphicon glyphicon-play"></span>WATCH VIDEO</a></p>
	            </div> <!-- /.section-intro -->
	    	</div>
		</div>

		<?php
		video_popup('wildlife-swamp-deer-translocation', 'gXwjemTw-Ng');
		?>