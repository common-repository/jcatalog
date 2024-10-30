<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Wishlist_Wishlist_my_wishlist_items_view extends Output_Listings_class {
function prepareQuery() {
		$eid = WGlobals::getEID();
		if ( empty($eid) ) return false;
		return true;
	}}