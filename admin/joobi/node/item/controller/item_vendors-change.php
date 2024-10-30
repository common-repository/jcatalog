<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_vendors_change_controller extends WController {
	function vendors_change() {
		$serialziedList = base64_encode( serialize( WGlobals::getEID( true ) ) );
		WPages::redirect( 'controller=vendors-change&serialListPdID=' . $serialziedList . '&returnLink=' . WGlobals::get( 'controller' ) );
		return true;
	}
}