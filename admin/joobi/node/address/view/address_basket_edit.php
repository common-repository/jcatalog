<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Address_Address_basket_edit_view extends Output_Forms_class {
protected function prepareView() {
	$zoneusestates = ( WPref::load( 'PCART_NODE_USENEWCART' ) ? WPref::load( 'PCART_NODE_ZONEUSESTATES' ) : WPref::load( 'PBASKET_NODE_ZONEUSESTATES' ) );
	if ( empty($zoneusestates) ) {
		$this->removeElements( array('basket_edit_address_stateid_picklist' ) );
	} else {
		$this->removeElements( array('basket_edit_address_state_input' ) );
	}
	return true;
}
}