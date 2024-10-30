<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreDeleteimg_listing extends WListings_default{
	function create() {
		$premium=$this->getValue('premium');
		$pid=$this->getValue('pid');
		$filid=$this->getValue('filid');
		$this->element->lien = null;
			$objButtonO = WPage::newBluePrint( 'button' );
			$objButtonO->type = 'link';
			$objButtonO->text = WText::t('1225790126CCSR');
			$objButtonO->color = 'danger';
			$objButtonO->icon = 'fa-trash-o';
			$controller = WGlobals::get('controller');
			$objButtonO->link = WPage::link( 'controller=item&task=deleteimage&eid=' . $pid . '&filid=' . $this->getValue( 'filid' ) . '&premium=' . $premium . '&tocontroller=' . $controller );
			$this->content = WPage::renderBluePrint( 'button', $objButtonO );
		return true;
	}}