<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement('listing.text');
class Vendor_CoreVendorsinboxtitlefe_listing extends WListing_text {
	function create() {
		$isread = $this->getValue( 'isread' );
		if ( !empty( $isread ) ) $this->content = '<b>' . $this->value . '</b>';
		else return parent::create();
		return parent::create();
	}
}