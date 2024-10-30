<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Catagories_picklist extends WPicklist {
	function create() {
		$prodtypid = WGlobals::get( 'prodtypid', 0 );
		$itemCategoryM = WModel::get( 'item.category' );
		$itemCategoryM->makeLJ( 'item.categorytrans', 'catid' );
		$itemCategoryM->whereLanguage();
		$itemCategoryM->select( 'name', 1 );
		$itemCategoryM->select( array( 'catid', 'parent', 'namekey' ) );
		if ( !empty($prodtypid) ) {
			$itemCategoryM->openBracket();
			$itemCategoryM->whereE( 'prodtypid', $prodtypid );
			$itemCategoryM->operator( 'OR' );
			$itemCategoryM->where( 'prodtypid', '=', '0' );
			$itemCategoryM->closeBracket();
		}
		$itemCategoryM->where( 'namekey', '!=', 'root' );
		$itemCategoryM->whereE( 'publish', 1 );
		$itemCategoryM->defaultSorting();
		$itemCategoryM->checkAccess();
		$itemCategoryM->defaultLimit();
		$allCategoriesA = $itemCategoryM->load( 'ol' );
		$parent = array();
		$parent['pkey'] = 'catid';
		$parent['parent'] = 'parent';
		$parent['name'] = 'name';
		$childOrderParent = array();
		$list = WOrderingTools::getOrderedList( $parent, $allCategoriesA, 1, false, $childOrderParent );
		if ( empty($list) ) return false;
		$this->addElement( 0, '- ' . WText::t('1311592756JOUI') . ' -' );
		foreach( $list as $itemList ) {
			$this->addElement( $itemList->catid, $itemList->name );
		}
		return true;
	}}