<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_category_show_controller extends WController {
function show() {
	$option = WApplication::getApp();
	if ( $option != 'jsubscription' ) {
		$eid = WGlobals::getEID();
		if (WGlobals::getEID() < 2) WPages::redirect( 'controller=catalog' );
	}
	if ( $option == 'jsubscription' ) {
		$eid = WGlobals::getEID();
		if ( !empty($eid) ) WPages::redirect( 'controller=subscription&task=listing&id=' . $eid, true );
		else {
			$prodCatM = WModel::get( 'item.category' );
			$prodCatM->whereE( 'type', 1 );
			$prodCatM->whereE( 'publish', 1 );
			$prodCatM->setLimit(3);
			$resultCatidA = $prodCatM->load( 'lra', 'catid' );
			$numberofCats = sizeof( $resultCatidA );
			if ( $numberofCats <= 1 ) WPages::redirect( 'controller=subscription&task=listing&id=' . $resultCatidA[0] );
		}
	}
	if ( empty($eid) ) $eid = WGlobals::get( 'catid' );
if ( WRoles::isNotAdmin( 'storemanager' ) ) {
WPages::redirect( 'controller=catalog&task=category&eid='. $eid );
return true;
}
	if ( empty($prodCatM) ) $prodCatM = WModel::get ('item.category');
	$prodCatM->select ('catid', 0, null, 'count');
	$prodCatM->whereE ( 'parent', $eid );
	$count= $prodCatM->load ('lr');
	WGlobals::set('count', $count);
	if ( WGlobals::checkCandy(50) ) {
		if ( !defined('PCURRENCY_NODE_MULTICUR') ) {
			WPref::get('currency.node');
		}
		if ( PCURRENCY_NODE_MULTICUR ) WGlobals::set( 'currency-show', true, 'global' );
		else WGlobals::set( 'currency-show', false, 'global' );
	}
	$catid = WGlobals::get( 'catid' );
		$link = WPage::linkHome( 'controller=catalog' , WPage::getPageId( 'catalog' ) );
	$home = '<a href="'.$link.'">';
	$home .= WText::t('1206732431CQBG');
	$home .= '</a>';
	$iconO = WPage::newBluePrint( 'icon' );
	$iconO->icon = 'fleche';
	$iconO->text = 'Arrow';
	$home .= WPage::renderBluePrint( 'icon', $iconO );
	if ( !empty($catid) ) {
		if ( $catid == 1 ) WGlobals::set( 'parent', 1 );
 			WGlobals::setSession( 'pageLocation', 'lastPageItem', WPage::getPageId() );
 			WGlobals::setSession( 'pageLocation', 'lastPage', 'controller=item-category&task=show&eid=' . $catid );
			$vendorC = WClass::get('vendor.helper',null,'class',false);
			$myVendor = $vendorC->getVendor();
			if ( WGlobals::checkCandy(50) ) $image = $vendorC->showImage();
			else $image = null;
	} else {
		WGlobals::set('parent',1);
		WGlobals::set('catid',1);
		$vendorC = WClass::get('vendor.helper',null,'class',false);
		$myVendor = $vendorC->getVendor();
		if ( WGlobals::checkCandy(50) ) $image = $vendorC->showImage();
		else $image = null;
	}
	return true;
}
function _isCategoryVendor($catid) {
	$username = WUser::get( 'username' );
	$uid = WUser::get( 'uid' );
	$vendorCatNamekey = $username . '_' . $uid;
	$namekey = WModel::getElementData( 'item.category', $catid, 'namekey' );
	$result = ( $namekey == $vendorCatNamekey ) ? true : false;
	return $result;
}}