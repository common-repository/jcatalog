<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreSticky_listing extends WListings_default{
function create(){
	$sticky=$this->getValue('sticky');
	if ($sticky){
		$iconO = WPage::newBluePrint( 'icon' );
		$iconO->icon = 'push-pin';
		$iconO->text = WText::t('1395500429FBNE');
		$this->content = WPage::renderBluePrint( 'icon', $iconO );
	}
	return true;
}
}