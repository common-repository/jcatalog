<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Wishlist_users_items_back_controller extends WController {
function back() {
	WPages::redirect( 'controller=wishlist-users' );
	return true;
}}