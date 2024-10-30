<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WLoadFile( 'wishlist.controller.wishlist-my-items_add' );
class Catalog_favorite_controller extends Wishlist_my_items_add_controller {
		function favorite() {
	return parent::add();
}
}