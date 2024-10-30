<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Vendorcategory_picklist extends WPicklist {
	function create() {
		$uid = WUser::get( 'uid' );
		$name = WUser::get( 'username' );
		$vendid = WGlobals::get( 'id' );
		$vendorHelperC = WClass::get('vendor.helper',null,'class',false);				
		if ( !empty( $uid ) ) $vendid = $vendorHelperC->getVendorID( $uid );
		else return false;
		$itemCategoryM = WModel::get( 'item.category' );
		$itemCategoryM->whereE( 'namekey', $name .'_'. $uid );
		$topID = $itemCategoryM->existID();
		$itemCategoryM->whereE( 'vendid', $vendid );
		$itemCategoryM->where( 'depth', '>', 0);
		$itemCategoryM->orderBy( 'alias' );
		$itemCategoryM->defaultLimit();
		$categories = $itemCategoryM->load( 'ol', array( 'catid', 'alias' ) );
		if ( !empty($categories) ) foreach($categories as $category)  $this->addElement( $category->catid , $category->alias);
		else {
			$messsage = WMessage::get();
			$messsage->userN('1316670030MXBL');
			return false;
		}
		return true;
	}}