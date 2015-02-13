<?php

elgg_register_event_handler('init', 'system', 'hypeWall_izap_videos');

function hypeWall_izap_videos() {

	$css_wall_video = elgg_get_simplecache_url('css', 'wall_video');
	elgg_register_simplecache_view('css/wall_video');
	elgg_register_css('wall_video_css', $css_wall_video);
	elgg_load_css('wall_video_css');

	elgg_register_menu_item('wall-filter', array(
		'name' => 'izap_videos',
		'text' => '<i class="wall-icon wall-icon-video"></i>',
		'title' => elgg_echo('wall:video'),
		'href' => 'videos/add/' . elgg_get_logged_in_user_guid(),
		'priority' => 500
	));
}
