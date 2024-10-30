<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Parentcategory_picklist extends WPicklist {
	function create() {
		$eid = WGlobals::getEID();
				if ( $eid == 1 ) return false;
		$prodtypid = WGlobals::get( 'prodtypid', 0 );
				if ( !empty($eid) ) {
			$catidDefault = WModel::getElementData( 'item.category', $eid, 'parent' );
		} else {
			$catidDefault = 0;
		}
				$itemCategoryM = WModel::get( 'item.category' );
		$itemCategoryM->whereE( 'parent', $eid );
		$allParentCATIDA = $itemCategoryM->load( 'lra', 'catid' );
				$this->setDefault( $catidDefault, false );
		$itemCategoryM->makeLJ( 'item.categorytrans', 'catid' );
		$itemCategoryM->whereLanguage();
		$itemCategoryM->select( 'name', 1 );
		$itemCategoryM->select( array( 'catid', 'parent', 'namekey', 'publish', 'alias' ) );
				if ( !empty($allParentCATIDA) ) $itemCategoryM->whereIn( 'catid', $allParentCATIDA, 0, true );
				$controller = WGlobals::get( 'controller' );
		$prodTypeT = WType::get( 'item.designation' );
		$allTernativeA = $prodTypeT->allNames();
		$thereIsAlternative = in_array( $controller, $allTernativeA ) ? true : false;
		if ( !empty($prodtypid) || $thereIsAlternative ) {
			$itemCategoryM->openBracket();
			if ( $thereIsAlternative ) {
				$productTypeM = WModel::get( 'item.type' );
				$typeValue = $prodTypeT->getValue( $controller, false );
				$productTypeM->whereE( 'type', $typeValue );
				$productTypeM->whereE( 'publish', 1 );
				$auctionTypesA = $productTypeM->load('lra', 'prodtypid' );
				if ( !empty($auctionTypesA) ) $itemCategoryM->whereIn( 'prodtypid', $auctionTypesA );
			} else {
				$itemCategoryM->whereE( 'prodtypid', $prodtypid );
			}			$itemCategoryM->operator( 'OR' );
			$itemCategoryM->where( 'prodtypid', '=', '0' );
			$itemCategoryM->closeBracket();
		}
								WPref::load( 'PITEM_NODE_ALLOWVENDORCAT' );
				if ( WRoles::isNotAdmin( 'storemanager' ) ) {
			if ( PITEM_NODE_ALLOWVENDORCAT && PITEM_NODE_ALLOWPRODALLCAT != 1 ) {
				$uid = WUser::get('uid');
				$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
				$vendid = $vendorHelperC->getVendorID( $uid );
				$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
				$StoreManagerVendid = $vendorHelperC->getVendorID( 0, true );
				if ( empty( $vendid ) ) {
						$vendid = $StoreManagerVendid;
				}
								if ( PITEM_NODE_ALLOWPRODALLCAT == 3 ) {
					$itemCategoryM->openBracket();
					$itemCategoryM->whereE( 'vendid', $StoreManagerVendid );
					$itemCategoryM->operator( 'OR' );
					$itemCategoryM->whereE( 'vendid', $vendid );
					$itemCategoryM->closeBracket();
				} else {						$itemCategoryM->whereE( 'vendid', $StoreManagerVendid );
				}
			}
		}
		if ( WRoles::isNotAdmin( 'storemanager' ) ) {
			$itemCategoryM->whereE( 'publish', 1 );
			$itemCategoryM->checkAccess();
		}
		if ( !empty($catidDefault) ) {
			$itemCategoryM->openBracket();
			$itemCategoryM->whereE( 'catid', $catidDefault );
			$itemCategoryM->operator( 'OR' );
		}
		if ( !empty($eid) ) $itemCategoryM->where( 'catid', '!=', $eid ); 		if ( !empty($catidDefault) ) $itemCategoryM->closeBracket();
		$itemCategoryM->defaultSorting();
		$itemCategoryM->defaultLimit();
		$allCategoriesA = $itemCategoryM->load( 'ol' );
				if ( empty($allCategoriesA) ) return false;
		$parent = array();
		$parent['pkey'] = 'catid';
		$parent['parent'] = 'parent';
		$parent['name'] = 'name';
		$childOrderParent = array();
		$list = WOrderingTools::getOrderedList( $parent, $allCategoriesA, 1, false, $childOrderParent );
		if ( empty($list) ) return false;
		$this->addElement( 0, WText::t('1359160980BTYI') );
		foreach( $list as $itemList ) {
			if ( $itemList->publish != 1 ) $extra = ' ( '.WText::t('1206732372QTKO').' )';
			else $extra = '';
			$this->addElement( $itemList->catid, $itemList->name . $extra );
		}
		return true;
	}
	private function _traceVendor() {
	if ( WRoles::isAdmin( 'storemanager' ) ) return 0;
	else {
		$uid = WUser::get('uid');
		static $vendidA = null;
		if ( !isset( $vendidA[ $uid ] ) && !empty( $uid ) ) {
			$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
			$vendidA[ $uid ] = $vendorHelperC->getVendorID( $uid );
		}
		return isset( $vendidA[ $uid ] ) ? $vendidA[ $uid ] : 0;
	}
	}
}