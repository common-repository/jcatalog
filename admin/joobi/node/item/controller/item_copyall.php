<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_copyall_controller extends WController {
	function copyall() {
		if ( WPref::load( 'PCATALOG_NODE_SUBSCRIPTION_INTEGRATION' ) && WExtension::exist( 'subscription.node' ) && WRoles::isNotAdmin( 'storemanager' ) ) {
			$subscriptionCatalogrestrictionC = WClass::get( 'subscription.catalogrestriction' );
			$subscriptionCatalogrestrictionC->itemCreate( true, 0 );
		}
		return parent::copyall();
	}	
}