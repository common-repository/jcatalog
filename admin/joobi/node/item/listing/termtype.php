<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreTermtype_listing extends WListings_default{
function create() {
	if ($this->value == 1) $this->content = WText::t('1206732400OWZK');
	elseif ($this->value == 2) $this->content = WText::t('1341596519RVAQ');
	elseif ($this->value == 3) $this->content = WText::t('1311845275JGPO');
	else $this->content = WText::t('1341596519RVAR');
	return true;
}}