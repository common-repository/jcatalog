<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_makeprivate_controller extends WController {
	function makeprivate() {
		$trk = WGlobals::get( JOOBI_VAR_DATA );
		parent::save();
		$ticketM = WModel::get('ticket');
		$tkid = WGlobals::get('tkid');
		$private = WGlobals::get('private');
		$priority = WGlobals::get('priority');
		$type= WGlobals::get('tktypeid');
		$authoruid = WGlobals::get('authoruid');
		if ( WRoles::isNotAdmin( 'supportagent' ) ) {
			$uid = WUser::get( 'uid' );
			$ticketM->makeLJ( 'ticket.project' , 'pjid' );
			$ticketM->makeLJ( 'ticket.projectmembers' , 'pjid', 'pjid', 1, 2 );
			$ticketM->whereE( 'authoruid', $uid, 0, null, 1 );
			$ticketM->whereE( 'uid', $uid, 2, null, 0, 1, 1 );
			$ticketReplySID = WModel::get('ticket.reply', 'sid');
			$tkid = $trk[$ticketReplySID]['tkid'];
		} else {	
			$ticketM->getFormData();
		}
		if ( !empty( $tkid ) ) {
			$ticketM->whereE( 'tkid', $tkid );
			$privateticket = $ticketM->load( 'lr', 'private' );
			$ticketM->whereE( 'tkid', $tkid );
			$ticketM->setVal( 'private', ! $privateticket );
			$ticketM->update();
		}
		WPages::redirect( 'controller=ticket-reply&task=listing&tkid=' . $tkid . '&private=' . $private . '&priority='.$priority.'&authoruid='.$authoruid.'&tktypeid='.$type);
		return true;
	}
}