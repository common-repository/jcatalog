<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Ticket_change_owner_listing_view extends Output_Listings_class {
function prepareView() {
		$tkid = WGlobals::get( 'tkid_' . WModel::getID( 'ticket') );
		if ( !empty($tkid) ) WGlobals::set( 'tkid', $tkid[0] );
		return true;
	}}