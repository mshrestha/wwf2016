<?php
$section_first = 0;

$popup_wildlife_section_first = $section_first;
$popup_wildlife_section_last = 4;//5 section
$popup_wildlife_section = ['wildlife-reducing-human-wildlife-conflict', 'wildlife-rhino-translocation', 'wildlife-snow-leopard-collaring', 'wildlife-swamp-deer-translocation', 'wildlife-zero-poaching'];

$popup_forests_section_first = $section_first;
$popup_forests_section_last = 5;//6 section
$popup_forests_section = ['forests-corridors-management', 'forests-corridors-restoration', 'forests-grazing-control', 'forests-green-recovery', 'forests-habitat-management', 'forests-sustainable-communities'];

$popup_climate_section_first = $section_first;
$popup_climate_section_last = 4;//5 section
$popup_climate_section = ['climate-change-alternate-energy', 'climate-change-building-capacities', 'climate-change-building-community', 'climate-change-participation', 'climate-change-permanent'];

$popup_water_section_first = $section_first;
$popup_water_section_last = 5;//6 section
$popup_water_section = ['water-conservation', 'water-drinking-water', 'water-improved-irrigation', 'water-piloting-payments', 'water-ramsar', 'water-sustainable-agriculture'];

$popup_communications_section_first = $section_first;
$popup_communications_section_last = 4;//5 section
$popup_communications_section = ['communications-earth-hour', 'communications-mountain-day', 'communications-prince-harry', 'communications-tgg', 'communications-tiger-day'];

function popup_navigation($previous_story_id = '', $next_story_id = '') {
  echo '<ul class="popup-navigation">';
    echo '<li class="popup-close"><span class="icon-cross" title="Click or Press ESC Key"></span></li>';
    if($previous_story_id != '' && $next_story_id != '') {
    echo '<li><a href="#" class="popup-trigger previous-story" id="'.$previous_story_id.'">Previous Story</a></li>
          <li><a href="#" class="popup-trigger next-story" id="'.$next_story_id.'">Next Story</a></li>';
    }//end if
  echo '</ul>';
}