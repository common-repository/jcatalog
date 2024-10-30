<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_recalculatecategory_controller extends WController {
function recalculatecategory() {
	$itemCAtrecalculateC = WClass::get( 'item.catrecalculate' );
	$itemCAtrecalculateC->reCalculateAll();
	$this->userS('1436323750RBXF');
	WPages::redirect( 'controller=item&task=preferences' );
	return true;
}
}