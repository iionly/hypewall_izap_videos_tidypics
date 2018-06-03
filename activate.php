<?php

// If a previous version of the hypeWall-iZAP Videos plugin with the old name was installed
// handle the change of plugin name / id

$current_version = elgg_get_plugin_setting('version', 'hypewall_izap_videos_tidypics');
$new_version = '2.3.4';

if (!$current_version) {

	// show hidden entities (in this case disabled plugins)
	$old_access = access_get_show_hidden_status();
	access_show_hidden_entities(true);

	$old_plugin_previously_installed = elgg_get_plugin_from_id('hypeWall_izap_videos');

	if ($old_plugin_previously_installed) {
		elgg_unset_all_plugin_settings('hypeWall_izap_videos');
	}

	access_show_hidden_entities($old_access);
}

if (version_compare($current_version, $new_version, '!=')) {
	// Set new version
	elgg_set_plugin_setting('version', $new_version, 'hypewall_izap_videos_tidypics');
}
