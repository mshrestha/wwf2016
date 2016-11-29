<?php
$section_first = 0;

$popup_wildlife_section_first = $section_first;
$popup_wildlife_section_last = 4;//5 section
$popup_wildlife_section = ['wildlife-rhino-translocation', 'wildlife-snow-leopard-collaring', 'wildlife-zero-poaching', 'wildlife-swamp-deer-translocation', 'wildlife-reducing-human-wildlife-conflict'];

$popup_forests_section_first = $section_first;
$popup_forests_section_last = 3;//4 section
$popup_forests_section = ['forests-habitat-management', 'forests-corridors-management', 'forests-sustainable-communities', 'forests-grazing-control'];

$popup_climate_section_first = $section_first;
$popup_climate_section_last = 4;//5 section
$popup_climate_section = ['climate-change-participation', 'climate-change-building-community', 'climate-change-alternate-energy', 'climate-change-building-capacities', 'climate-change-permanent'];

$popup_water_section_first = $section_first;
$popup_water_section_last = 4;//5 section
$popup_water_section = ['water-sustainable-agriculture', 'water-drinking-water', 'water-conservation', 'water-ramsar', 'water-piloting-payments'];

$popup_policy_section_first = $section_first;
$popup_policy_section_last = 4;//5 section
$popup_policy_section = ['policy-tal-nepal', 'policy-green-recovery', 'policy-chal-strategy', 'policy-aligning', 'policy-sustainable'];

$popup_communications_section_first = $section_first;
$popup_communications_section_last = 4;//5 section
$popup_communications_section = ['communications-prince-harry', 'communications-mountain-day', 'communications-earth-hour', 'communications-tiger-day', 'communications-tgg'];

function popup_navigation($previous_story_id = '', $next_story_id = '') {
	// echo '<div class="loading"></div>';
  echo '<ul class="popup-navigation">';
    echo '<li class="popup-close"><span class="icon-cross" title="Click or Press ESC Key"></span></li>';
    if($previous_story_id != '' && $next_story_id != '') {   

      $all_last_story_id = ['wildlife-reducing-human-wildlife-conflict', 'forests-grazing-control', 'climate-change-permanent', 'water-piloting-payments', 'policy-sustainable', 'communications-tgg'];
      // print_r($previous_story_id);
      if( in_array($previous_story_id, $all_last_story_id) ) {
        //i.e prev story is the last story, hide prev story link
        $hidePrevStory = 'hidden';
      }
      else {
        $hidePrevStory = '';
      }

      $all_first_story_id = ['wildlife-rhino-translocation', 'forests-habitat-management', 'climate-change-participation', 'water-sustainable-agriculture', 'policy-tal-nepal', 'communications-prince-harry'];
      // print_r($next_story_id);
      if( in_array($next_story_id, $all_first_story_id) ) {
        //i.e next story is the first story, hide next story link
        $hideNextStory = 'hidden';
      }
      else {
        $hideNextStory = '';
      }

      echo '<li class="'.$hidePrevStory.'"><a href="'.$previous_story_id.'-popup" class="popup-trigger previous-story" id="'.$previous_story_id.'">Previous Story</a></li>';
      echo '<li class="'.$hideNextStory.'"><a href="'.$next_story_id.'-popup" class="popup-trigger next-story" id="'.$next_story_id.'">Next Story</a></li>';
    }//end if
  echo '</ul>';
}

// for small size image in mobile devices
function isMobile() {
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackbe‌​rry|iemobile|bolt|bo‌​ost|cricket|docomo|f‌​one|hiptop|mini|oper‌​a mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|‌​webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function get_small_image() {
	if(isMobile()):
		return '-sm';
	endif;
}

function copyright($copyright) {
  echo '<div class="copyright-text">&copy; '.$copyright.'</div>';
}