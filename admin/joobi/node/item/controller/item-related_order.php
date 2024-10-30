<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_related_order_controller extends WController {
function order() {
	$eid=WGlobals::getEID();
	parent::order();
	WPages::redirect('controller=item-related&eid='.$eid);
	return true;
}}