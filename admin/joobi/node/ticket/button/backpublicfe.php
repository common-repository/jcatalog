<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreBackpublicfe_button extends WButtons_external {
function create() {
	$this->setAddress( WPage::routeURL('controller=ticket') );
	$myText = WText::t('1206961882TDHA');
	$this->setTitle($myText);
	$this->setIcon('back');
}}