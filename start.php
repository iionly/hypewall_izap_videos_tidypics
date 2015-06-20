<?php

elgg_register_event_handler('init', 'system', 'hypeWall_izap_videos');

function hypeWall_izap_videos() {
	elgg_extend_view('css/elgg', 'hypeWall_izap_videos/css');

	elgg_register_menu_item('wall-filter', array(
		'name' => 'izap_videos',
		'text' => '<i class="wall-icon wall-icon-video"></i>',
		'title' => elgg_echo('wall:video'),
		'href' => 'videos/add/' . elgg_get_logged_in_user_guid(),
		'priority' => 500
	));
}
