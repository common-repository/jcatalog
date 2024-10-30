<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement('listing.textlink');
class Item_CoreNewitem_listing extends WListing_textlink {
function create()  {
	static $itemTypeC = null;
	$prodtypid = $this->getValue( 'prodtypid' );
	if ( empty( $prodtypid ) || WPref::load( 'PITEM_NODE_CATMULTIPLETYPE' ) ) {
		$this->content = WText::t('1327698302NOMA');
		return true;
	}
	if (empty($itemTypeC) ) $itemTypeC = WClass::get( 'item.type' );
	$ITEM_TYPE_NAME =  $itemTypeC->loadTypeData( $prodtypid, 'name' );
	$this->content = str_replace(array('$ITEM_TYPE_NAME'), array($ITEM_TYPE_NAME),WText::t('1359160979NZWA'));
	$designation = $itemTypeC->loadTypeData( $prodtypid, 'designation' );
	$this->element->lien = 'controller='.$designation.'&task=new(categoryid=catid)(prodtypid=prodtypid)';
	return parent::create();
}}