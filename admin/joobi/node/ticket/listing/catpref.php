<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreCatpref_listing extends WListings_default{
function create() {
	$iconO = WPage::newBluePrint( 'icon' );
	$iconO->icon = 'preferences';
	$iconO->text = WText::t('1206732392OZUQ');
	$this->content = WPage::renderBluePrint( 'icon', $iconO );
	return true;
}}