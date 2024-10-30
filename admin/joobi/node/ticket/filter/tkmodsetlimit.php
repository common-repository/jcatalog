<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Tkmodsetlimit_filter {
	function create(){
			$limit = WGlobals::set('numdisplay');
			$ticketDisplayM = WModel::get('ticket');
			$ticketDisplayM->select('tkid');
			$ticketDisplayM->setLimit($limit);
			$limitedDisplay = $ticketDisplayM->load('o');
			return $limit;
	}
}