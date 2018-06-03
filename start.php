<?php

elgg_register_event_handler('init', 'system', 'hypewall_izap_videos_tidypics');

function hypewall_izap_videos_tidypics() {

	elgg_extend_view('css/elgg', 'hypewall_izap_videos_tidypics/css');

	if (elgg_is_active_plugin('izap_videos')) {
		elgg_register_menu_item('wall-filter', [
			'name' => 'hypewall_izap_videos',
			'text' => elgg_view_icon('video', ['class' => 'wall-icon wall-icon-video']),
			'title' => elgg_echo('wall:video'),
			'href' => 'videos/add/' . elgg_get_logged_in_user_guid(),
			'priority' => 500,
		]);
	}

	if (elgg_is_active_plugin('tidypics')) {
		elgg_register_menu_item('wall-filter', [
			'name' => 'hypewall_tidypics',
			'text' => elgg_view_icon('image', ['class' => 'wall-icon wall-icon-image']),
			'title' => elgg_echo('wall:tidypics_images'),
			'href' => "ajax/view/photos/selectalbum/?owner_guid=" . elgg_get_logged_in_user_guid(),
			'link_class' => 'elgg-lightbox',
			'priority' => 501,
		]);
	}
}
