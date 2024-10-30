<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Item_categories_listing_view extends Output_Listings_class {
	function prepareView() {
		$multipelType = WPref::load( 'PITEM_NODE_CATMULTIPLETYPE' );
		if ( $multipelType ) $this->removeElements( 'item_categories_listing_prodtypid' );
		return true;
	}	
}