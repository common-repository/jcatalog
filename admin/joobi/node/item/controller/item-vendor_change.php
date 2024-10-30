<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_vendor_change_controller extends WController {
	function change() {
		$pid = WGlobals::get( 'pid' );
		$vendid = WGlobals::getEID();
		if ( empty($pid) || empty($vendid) ) return false;
		$itemM = WModel::get( 'item' );
		$itemM->whereE( 'pid', $pid );
		$itemM->setVal( 'vendid', $vendid );
		return $itemM->update();
	}
}