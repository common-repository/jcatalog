<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_Translation_class extends WClasses {
	public function secureTranslation($itemO,$sid,$eid) {
		$uid = WUser::get( 'uid' );
		if ( empty($uid) ) return false;
						if ( WRole::hasRole( 'storemanager' ) ) return true;
		if ( !WRole::hasRole( 'vendor' ) ) return false;
				$vendorHelperC = WClass::get('vendor.helper',null,'class',false);				
		$vendid = $vendorHelperC->getVendorID( $uid );
		if ( empty($vendid) ) return false;
		if ( $eid == $vendid ) return true;		
		return false;
	}	
}