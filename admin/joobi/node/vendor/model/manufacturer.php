<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_Manufacturer_model extends WModel {
	function addValidate() {
				$vendorsTypeC = WClass::get( 'vendors.type' );
		$this->vendtypid = $vendorsTypeC->loadTypeData( 'manufacturer', 'vendtypid' );
		return true;
	}	
}