<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_inbox_cancelmessage_controller extends WController {
function cancelmessage() {
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$vendid = ( isset($trk['x']['id']) ) ? $trk['x']['id'] : 0;
	parent::cancel();
	$link = ( !empty($vendid)) ? 'controller=vendor-inbox&task=listing&id='. $vendid : 'controller=vendor-inbox&task=listing';
	WPages::redirect( $link, true );
	return true;
}}