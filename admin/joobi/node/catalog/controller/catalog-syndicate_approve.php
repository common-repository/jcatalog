<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_syndicate_approve_controller extends WController {
	function approve() {
		$pid = WGlobals::get( 'pid' );
		$vendid = WGlobals::get( 'vendid' );
		if ( empty($pid) || empty($vendid) ) return false;
				$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
		$vendidOwner = $vendorHelperC->getVendorID( 0, false, true );
		if ( empty($vendidOwner) ) return false;
		$itemSyndicateM = WModel::get( 'item.syndication' );
		$itemSyndicateM->whereE( 'pid', $pid );
		$itemSyndicateM->whereE( 'vendid', $vendid );
		$itemSyndicateM->whereE( 'ownervendid', $vendidOwner );
		$itemSyndicateM->setVal( 'approved', 1 );
		$itemSyndicateM->update();
		$this->userS('1461809277MYRJ');
		return true;
	}	
}