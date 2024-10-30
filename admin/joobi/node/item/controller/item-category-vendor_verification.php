<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_category_vendor_verification_controller extends WController {
function verification() {
	$roleC = WRole::get();
	$status = WRole::hasRole( 'sadmin' );
	if ( $status ) {
		$catid = WGlobals::getEID();
		$catObj5 = WModel::getElementData( 'item.category', $catid );
		$catName = $catObj5->name;
		$uid = $catObj5->uid;
		$name = WUser::get( 'name', $uid );
		$itemCategoryM = WModel::get( 'item.category' );
		$itemCategoryM->setVal( 'blocked', 0 );
		$itemCategoryM->whereE( 'catid', $catid );
		$itemCategoryM->update();
		$param = new stdClass;
		$param->categoryName = $catName;
		$param->name = $name;
		$emailNamekey = 'vendor_item_category_approval_notification';
		$vendMemC = WClass::get( 'vendor.email', null, 'class', false );
		if ( !empty($vendMemC) ) $vendMemC->sendNotification( $uid, $emailNamekey, $param );
		$message = WMessage::get();
		$message->adminS( 'Successfully approved category!' );
	}
	WPages::redirect( 'controller=item-category&search=' . $catid );
	return true;
}}