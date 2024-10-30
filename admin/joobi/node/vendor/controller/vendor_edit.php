<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_edit_controller extends WController {
function edit() {
	$vendorC = WClass::get( 'vendor.helper', null, 'class', false );
	$vendid = $vendorC->getDefault();
	WGlobals::setEID( $vendid );
	return parent::edit();
}}