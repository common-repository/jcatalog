<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Type_picklist extends WPicklist {
function create() {
	$itemTypeM = WModel::get( 'item.type' );
	$itemTypeM->makeLJ( 'item.typetrans', 'prodtypid' );
	$itemTypeM->makeLJ( 'item.typetrans', 'prodtypid' );
	$itemTypeM->whereLanguage( 1 );
	$itemTypeM->select( 'name', 1 );
	$itemTypeM->whereE( 'publish', 1 );
	$itemTypeM->checkAccess();
	$itemTypeM->orderBy( 'ordering' );
	$itemTypeM->orderBy( 'type' );
	$itemTypeM->setLimit( 500 );
	$productTypesA = $itemTypeM->load( 'ol', 'prodtypid' );	
	if ( empty( $productTypesA ) ) {
		return false;
	}
	if ( !empty( $productTypesA ) ) {
		$defaultText = '';
		foreach( $productTypesA as $productType ) {
			$this->addElement( $productType->prodtypid, $productType->name );
		}
	}
	return true;
}
}