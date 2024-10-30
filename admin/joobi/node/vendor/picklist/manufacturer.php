<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_Manufacturer_picklist extends WPicklist {
	function create() {
		$this->addElement( 0, ' -- ' . WText::t('1463508473DHFV') . ' --' );
		$itemTypeM = WModel::get( 'vendor' );
				$itemTypeM->makeLJ( 'vendortrans', 'vendid' );
		$itemTypeM->makeLJ( 'vendor.type', 'vendtypid', 'vendtypid', 0, 2 );
		$itemTypeM->select( 'name', 1 );
		$itemTypeM->whereLanguage( 1 );
		$itemTypeM->whereE( 'publish', 1 );
		$itemTypeM->whereE( 'type', 5, 2 );
		$itemTypeM->orderBy( 'name', 'ASC', 1 );
		$itemTypeM->orderBy( 'type' );
		$itemTypeM->setLimit( 500 );
		$productTypesA = $itemTypeM->load( 'ol', array( 'vendid' ) );					
		if ( !empty( $productTypesA ) ) {
												foreach( $productTypesA as $productType ) {
				$productTypeID = $productType->vendid;
				$productTypeName = $productType->name;
								$this->addElement( $productTypeID, $productTypeName );
			}		
		}		
		return true;
	}
}