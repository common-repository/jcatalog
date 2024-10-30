<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_category_assign_back_controller extends WController {
function back() {
	WPages::redirect( 'controller=catalog&task=listing' );
	return true;
}}