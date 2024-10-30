<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Catpublish_filter {
function create() {
if ( WRoles::isAdmin( 'storemanager' ) ) return false;
else return 1;
}
}