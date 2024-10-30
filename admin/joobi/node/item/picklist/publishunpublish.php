<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Publishunpublish_picklist extends WPicklist {
function create() {
	$this->addElement( '0', WText::t('1206732372QTKO') );
	$this->addElement( '1', WText::t('1206732372QTKN') );
	return true;
}}