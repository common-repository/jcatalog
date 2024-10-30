<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Categoriesedit_picklist extends WPicklist {
	function create() {
		$pid = WGlobals::getEID();
		$prodtypid = WGlobals::get( 'prodtypid', 0 );
		if ( !empty($pid) ) {
			if ( empty($prodtypid) ) {
				$prodtypid = $this->getValue( 'prodtypid' );
			}
			$itemCategoryitemM = WModel::get('item.categoryitem');
			$itemCategoryitemM->whereE( 'pid', $pid );
			$itemCategoryitemM->whereE( 'premium', 1 );
			$catidDefault = $itemCategoryitemM->load('lr', 'catid' );
		} else {
			$catidDefault = 0;
		}
		$this->setDefault( $catidDefault, false );
		$itemCategoryM = WModel::get( 'item.category' );
		$itemCategoryM->makeLJ( 'item.categorytrans', 'catid' );
		$itemCategoryM->whereLanguage();
		$itemCategoryM->select( 'name', 1 );
		$itemCategoryM->select( array( 'catid', 'parent', 'namekey', 'publish', 'alias' ) );
		if ( WExtension::exist( 'vendors.node' ) && WPref::load( 'PVENDORS_NODE_RESTRICTCATEGORY' ) && WRoles::isNotAdmin( 'storemanager' ) ) {	
			$itemCategoryM->whereE( 'restrictcategory', 0 );
		}
		$controller = WGlobals::get( 'controller' );
		$prodTypeT = WType::get( 'item.designation' );
		$allTernativeA = $prodTypeT->allNames();
		$thereIsAlternative = in_array( $controller, $allTernativeA ) ? true : false;
		if ( !empty($prodtypid) || $thereIsAlternative ) {
			$itemCategoryM->openBracket();
			$multipelType = WPref::load( 'PITEM_NODE_CATMULTIPLETYPE' );
			$addItemType = false;
			if ( $thereIsAlternative ) {
				$productTypeM = WModel::get( 'item.type' );
				$typeValue = $prodTypeT->getValue( $controller, false );
				$productTypeM->whereE( 'type', $typeValue );
				$productTypeM->whereE( 'publish', 1 );
				$auctionTypesA = $productTypeM->load( 'lra', 'prodtypid' );
				if ( !empty($auctionTypesA) ) {
					if ( $multipelType ) {
						$itemCategoryM->makeLJ( 'item.categorytype', 'catid', 'catid', 0, 2 );
						$itemCategoryM->whereIn( 'prodtypid', $auctionTypesA, 2 );
					} else {
						$itemCategoryM->whereIn( 'prodtypid', $auctionTypesA );
					}
				} else {
					$addItemType = true;
				}
			} else {
				$addItemType = true;
			}
			if ( $addItemType ) {
				if ( $multipelType ) {
					$itemCategoryM->makeLJ( 'item.categorytype', 'catid', 'catid', 0, 2 );
					$itemCategoryM->whereE( 'prodtypid', $prodtypid, 2 );
				} else {
					$itemCategoryM->whereE( 'prodtypid', $prodtypid );
				}
			}
			$itemCategoryM->operator( 'OR' );
			if ( $multipelType ) $itemCategoryM->isNull( 'prodtypid', true, 2 );
			else $itemCategoryM->where( 'prodtypid', '=', '0' );
			$itemCategoryM->closeBracket();
		}
		$itemCategoryM->where( 'namekey', '!=', 'root' );
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
				} else {	
					$itemCategoryM->whereE( 'vendid', $StoreManagerVendid );
				}
			}
			$itemCategoryM->checkAccess();
			$itemCategoryM->whereE( 'publish', 1 );
		}
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
		$this->addElement( 0, WText::t('1359160980BTYH') );
		foreach( $list as $itemList ) {
			if ( $itemList->publish != 1 ) $extra = ' ( '.WText::t('1206732372QTKO').' )';
			else $extra = '';
			$this->addElement( $itemList->catid, $itemList->name . $extra );
		}
		return true;
	}}