<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreVendorcategory_button extends WButtons_external {
function create() {
	if ( WRoles::isNotAdmin( 'storemanager' ) && ! WPref::load( 'PITEM_NODE_ALLOWVENDORCAT' ) ) return false;
	return parent::create();
}}