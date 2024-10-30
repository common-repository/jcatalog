<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_CoreCurr_listing extends WListings_default{
function create() {
	if ( empty($this->value) ) return false;
	$symbol = $this->getValue( 'symbol' );
	$this->content = $this->value .' ('. $symbol .')';
	return true;
}
}