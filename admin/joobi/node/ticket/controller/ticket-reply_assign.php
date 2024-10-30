<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_assign_controller extends WController {
function assign() {
	$tkid = WGlobals::get('tkid');
	$uid = WUser::get('uid');
	$ticketProjectMemberM = WModel::get( 'ticket' );
	$ticketProjectMemberM->makeLJ( 'ticket.projectmembers','pjid', 'pjid',  0, 1 );
	$ticketProjectMemberM->whereE( 'tkid', $tkid );
	$ticketProjectMemberM->select( 'supportlevel', 1 );
	$ticketProjectMemberM->select( 'pjid',0 );
	$tkInfo = $ticketProjectMemberM->load( 'o' );
	if ( empty($tkInfo) ) {
		$message = WMessage::get();
		$message->historyW('1303289070EWBD');
		return false;
	}
	$modelID = $this->sid;
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$replyTransID = WModel::getID('ticket.replytrans');
	$description = @$trk[$replyTransID]['description'];
	if (!empty($description)) {
		parent::save();					
	}
	return true;
}}