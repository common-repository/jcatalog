<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Followup_filter {
function create() {
	$followup = 0;
	if (WGlobals::checkCandy(50)) {
		if (!defined('PTICKET_NODE_FOLLOWUPTICKET')) WPref::get('ticket.node');				
		if (PTICKET_NODE_FOLLOWUPTICKETT) {		
			$followup= 1;					
		}
	}
	return $followup;
}}