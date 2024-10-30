<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WLoadFile( 'wishlist.controller.wishlist_my_items_add' );
class Wishlist_my_items_favorite_controller extends Wishlist_my_items_add_controller {
function favorite() {
	return parent::add();
}}