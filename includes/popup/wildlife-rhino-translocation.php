		<img src="img/wildlife/rhino-translocation2<?php echo get_small_image();?>.jpg" class="hidden">
		<div id="wildlife-rhino-translocation-popup" class="popup-wrap" style="position: fixed; height: 100%; width: 100%;top: 0; left: 0; z-index: 999;">
			<?php copyright('WWF Nepal/Simrika Sharma');?>
		        <?php
		        // var_dump($wildlife_section);
		        $popup_wildlife_section_current = 0;

		        popup_navigation($popup_wildlife_section[$popup_wildlife_section_last], $popup_wildlife_section[$popup_wildlife_section_current+1]);
		        ?>
	    	<div class="article-section" style="background-image: url('img/wildlife/rhino-translocation2<?php echo get_small_image();?>.jpg'); height: 100%; width: 100%; top: 0; left: 0; z-index: 999;">
	            <div class="section-intro content-txt section-absolute section-bottom box light-green-box"><!-- static -->
	            	<h1 class="uppercase">A NEW HOME FOR RHINOS</h1>
	                <p>Five one-horned rhinos found a new home in Bardia National Park through a successful translocation expedition from Chitwan National Park in Nepal’s Terai Arc Landscape (TAL) on 1-5 March 2016. The translocation is part of a larger effort to move 30 rhinos to Bardia National Park (25 rhinos) and Shuklaphanta Wildlife Reserve (5 rhinos) through 2018. The expedition is an important step towards building a second viable population in the western complex of TAL with the broader goal of bringing back rhino populations to its historic level of 800+. As an encouraging development post-translocation, a male calf was born to a translocated female rhino on 22 May 2016.</p>
	                <p><a href="wildlife-rhino-translocation-video-popup" class="video-link popup-trigger" id=""><span class="glyphicon glyphicon-play"></span>WATCH: Zero poaching and the World Ranger Congress</a></p>
	            </div>
	    	</div>
    	</div>

    	<?php
    	video_popup('wildlife-rhino-translocation', '-U-V33tqrHc');
    	?>