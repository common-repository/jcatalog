<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_back_controller extends WController {
function back(){
	$ticketMId = WModel::getID( 'ticket.reply' );	
	$trk=WGlobals::get( JOOBI_VAR_DATA );		
	$tkid=$trk[$ticketMId]['tkid'];		
	$ticketM = WModel::get('ticket');
	$ticketM->whereE('tkid',$tkid);
	$ticket=$ticketM->load('o',array('private','lock'));
	$ticketM->whereE('tkid',$tkid);
	$ticketM->setVal('lock',0);
	$ticketM->update();
	WPages::redirect('controller=ticket');
return true;
}
}