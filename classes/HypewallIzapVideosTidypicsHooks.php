<?php

class HypewallIzapVideosTidypicsHooks {

	public static function HypewallIzapVideosTidypicsQuickLinks(\Elgg\Hook $hook) {
		$entity = $hook->getParam('entity');
		if (!$entity || !$entity->canWriteToContainer()) {
			return;
		}

		$types = get_registered_entity_types('object');
		if (!in_array('image', $types)) {
			return;
		}

		$menu = $hook->getValue();

		unset($menu['album']);
		unset($menu['image']);

		$logged_in_user = elgg_get_logged_in_user_entity();
		if (tidypics_can_add_new_photos(null, $logged_in_user)) {
			$menu_options = [
				'name' => 'tidypics_select_quicklink',
				'text' => elgg_echo('photos:addphotos'),
				'href' => "ajax/view/photos/selectalbum/?owner_guid=" . $logged_in_user->getGUID(),
				'link_class' => 'tidypics-selectalbum-lightbox',
			];
			$menu[] = \ElggMenuItem::factory($menu_options);
		}

		return $menu;
	}
}
