<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_moveproject_controller extends WController {
function moveproject() {
	$eid = WGlobals::getEID( true );
	WGlobals::setSession( 'ticket', 'moveProjectEID', $eid );
	return true;
}
}