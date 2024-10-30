<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_moveproject_controller extends WController {
function moveproject() {
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$ticketReplyID = WModel::get( 'ticket.reply', 'sid' );
	$eid = $trk[$ticketReplyID]['tkid'];
	$ticketM = WModel::get('ticket');
	$ticketM->whereE('tkid',$eid);		
	$ticketM->setVal('lock',0);		
	$ticketM->update();			
	WGlobals::setSession( 'ticket', 'moveProjectEID', array($eid) );
	return true;
}}