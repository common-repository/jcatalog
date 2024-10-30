<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreClose_button extends WButtons_external {
	function create() {
		$canAccess = WGlobals::get( 'ticketAccessAuthor', false, 'global' );
		if ( ! $canAccess ) return false;
		return true;
	}}