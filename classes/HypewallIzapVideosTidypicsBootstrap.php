<?php

class HypewallIzapVideosTidypicsBootstrap extends \Elgg\DefaultPluginBootstrap {

	public function init() {
		elgg_register_plugin_hook_handler('register', 'menu:wall:quick_links', '\HypewallIzapVideosTidypicsHooks::HypewallIzapVideosTidypicsQuickLinks', 501);
	}
}
