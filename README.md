hypeWall-iZAP Videos and Tidypics plugin for Elgg 3.0 and newer Elgg and 3.X
============================================================================

Latest Version: 3.0.0  
Released: 2020-08-29  
Contact: iionly@gmx.de  
License: GNU General Public License version 2  
Copyright: (C) iionly 2014


Description
-----------

On previous versions of this plugin (for Elgg 1.x and 2.x) there were links added to the hypeWall input form on the activity page to get quickly to the upload pages for photos (Tidypics) and videos (izap Videos). hypeWall for Elgg 3 in version 6.2.0 already offers quicklinks to the add pages of registered content types (of the bundled plugins and 3rd party plugins). These quicklinks work fine for creating videos (izap Videos) and would also work for creating photo albums (Tidypics). But the quicklink for adding photos to Tidypics albums is broken because Tidypics needs some additional info for the uploading of photos to work, i.e. which album the photos should be added to.

The hypeWall-iZAP Videos and Tidypics plugin for Elgg 3 no longer adds a links to the hypeWall input form to be forwarded to the izapVideos add video page but relies on the quicklink already added by the hypeWall itself.

For Tidypics the quicklinks added by hypeWall for adding albums and photos are removed though. Instead of these quicklinks there's a new one added that opens the "Upload photos" popup dialog already available in Tidypics to allow for selection of any existing album the new photos should be added to or forwards to the add new album page.


Requires
--------

- Elgg 3.0 or newer,
- hypeWall 6.2.0 (https://github.com/hypeJunction/Elgg3-hypeWall/releases/tag/6.2.0).


Suggests
--------

* iZAP Videos plugin (https://elgg.org/plugins/1914043),
* Tidypics plugin (https://elgg.org/plugins/385077).


Installation
------------

1. If you have installed a previous version of the hypeWall-iZAP Videos and Tidypics plugin disable the plugin in the admin section of your site and then remove the plugin folder from the mod directory of your Elgg installation,
2. Copy the hypewall_izap_videos_tidypics folder in your mod directory,
3. Enable the hypeWall-iZAP Videos and Tidypics plugin on your site.
