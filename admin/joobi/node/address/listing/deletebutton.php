<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'listing.butdelete' );
class Address_CoreDeletebutton_listing extends WListing_butdelete {
function create() {
	$selectedid = WGlobals::get('selectedid');
	$basketaddtype = WGlobals::get('basketaddtype');
	if ( $this->value != $selectedid ) {
		return parent::create();
	}
	return false;
}}