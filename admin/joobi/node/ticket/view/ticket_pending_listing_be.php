<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Ticket_pending_listing_be_view extends Output_Listings_class {
protected function prepareView() {
	if ( !WPref::load( 'PTICKET_NODE_TKRT' ) ) {
		$this->removeElements( array( 'ticket_pending_listing_be_response_time' ) );
	}
	return true;
}}