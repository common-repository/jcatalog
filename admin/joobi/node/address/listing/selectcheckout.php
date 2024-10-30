<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Address_CoreSelectcheckout_listing extends WListings_default {
function create() {
	$selectedid = WGlobals::get('selectedid');
	$basketaddtype = WGlobals::get('basketaddtype');
	if ( $this->value == $selectedid ) {
		$iconO = WPage::newBluePrint( 'icon' );
		$iconO->icon = 'yes';
		$iconO->text = WText::t('1206732372QTKI');
		$display = WPage::renderBluePrint( 'icon', $iconO );
	} else {
		$iconO = WPage::newBluePrint( 'icon' );
		$iconO->icon = 'cancel';
		$iconO->text = WText::t('1206732372QTKJ');
		$display = WPage::renderBluePrint( 'icon', $iconO );
	}
	$myLink = ( WPref::load( 'PCART_NODE_USENEWCART' ) ? 'controller=cart' : 'controller=basket' );
	$link = $myLink . '-address&task=selectaddress&selectedid='. $this->value .'&basketaddtype='. $basketaddtype;
	$this->content = '<a href="'. WPage::routeURL( $link ) .'">'. $display .'</a>';
	return true;
}
}