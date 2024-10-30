<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Item_category_listing_assign_view extends Output_Listings_class {
function prepareQuery() {
		$multipelType = WPref::load( 'PITEM_NODE_CATMULTIPLETYPE' );
		if ( ! $multipelType ) {
			$this->removeConditions( array( 'item_category_listing_assign_prodtypid', 'item_category_listing_assign_fix' ) );
		}
		if ( ! WExtension::exist( 'vendors.node' ) || ! WPref::load( 'PVENDORS_NODE_RESTRICTCATEGORY' ) ||  WRoles::isAdmin( 'storemanager' ) ) {	
			$this->removeConditions( array( 'item_category_listing_restrictcategory' ) );
		}
		return true;
	}}