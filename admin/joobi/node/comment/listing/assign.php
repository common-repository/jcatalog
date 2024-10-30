<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_CoreAssign_listing extends WListings_default{
function create() {
	if ( !empty($this->value) && $this->value != 0 ){
		$linkO = new WLink( '<span style="color:red">'.WText::t('1206732372QTKJ').'</span>' );
		$id = $this->getValue( 'id' );
		$link = WPage::routeURL( 'controller='. $this->controller .'&task=enable&id=' . $id );
		$this->content = $linkO->make($link);
	} else {
		$linkO = new WLink( '<span style="color:green">'.WText::t('1206732372QTKI').'</span>' );
		$id = $this->getValue( 'id' );
		$link = WPage::routeURL( 'controller='. $this->controller .'&task=enable&id=' . $id );
		$this->content = $linkO->make($link);
	}
	return true;
}}