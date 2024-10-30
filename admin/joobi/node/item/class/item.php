<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Item_class extends WClasses {
	public function getItemProperty($pid,$property) {
		if ( empty($property) ) return false;
		$value = WModel::getElementData( 'item', $pid, $property ); 
		switch( $value ) {
			case 2: 					$value = WPref::load( 'PCATALOG_NODE_' . strtoupper( $property ) );
				break;
			case 5: 					$itemLoadC = WClass::get( 'item.type' );
				$value = $itemLoadC->loadTypeBasedOnPID( $pid, $property );
				break;
			default:
				break;
		}
		return $value;
	}	
	public function getDesignation($pid) {
		$prodtypid = WModel::getElementData( 'item', $pid, 'prodtypid' );
		if ( empty($prodtypid) ) return false;
		$type = WModel::getElementData( 'item.type', $prodtypid, 'type' );
		if ( empty($type) ) return false;
		$itemTypeT = WType::get( 'item.designation' );
		$designationName = $itemTypeT->getName( $type );
		return $designationName;
	}
	public function getOwner($pid) {
		$vendid = WModel::getElementData( 'item', $pid, 'vendid' );
		if ( empty($vendid) ) return false;
				$vendorHelperC = WClass::get( 'vendor.helper' );
		$uid = $vendorHelperC->getVendor( $vendid, 'uid' );
		return $uid;
	}
	public function getName($pid) {
		return WModel::getElementData( 'item', $pid, 'name' );
	}
}