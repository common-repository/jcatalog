<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_close_controller extends WController {
function close() {
	$uid = WUser::get('uid');
	$ticketReplyTransID = WModel::get('ticket.replytrans', 'sid' );
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	if (isset($trk[$ticketReplyTransID])) {
		$descri = $trk[$ticketReplyTransID]['description'];
		if ( !empty($descri) )
		parent::save();
	}
	$sid = WModel::get('ticket.reply', 'sid');
	if (isset($trk)) {
		$tckid = $trk[$sid]['tkid'];
	} else {						
		$tckid = WGlobals::get('tkid');
	}
	$this->model = WModel::get('ticket');
	$this->model->whereE( 'tkid', $tckid );
	$ticket = $this->model->load('o',array('created','namekey'));
	$created = $ticket->created;			
	$namekey = $ticket->namekey;
	$this->model->whereE( 'tkid', $tckid );
	$this->model->setVal( 'status', 125 );
	$this->model->setVal( 'modified', time() );
	$this->model->setVal( 'deadline', 0 );
	$this->model->setVal('lock',0);
	$this->model->setVal('read',1);
	$this->model->setVal('followup',0);
	if ( $created>0 ) $this->model->setVal( 'elapsed', time()-$created );
	$this->model->update();
	$message = WMessage::get();
	$message->userS('1248677667PZKH',array('$namekey'=>$namekey));
	if ( WRoles::isAdmin( 'supportagent' ) ) {
		WPages::redirect('controller=ticket' );		
	} elseif (!empty($uid)) {
		WPages::redirect('controller=ticket-my');	
	} else {
		WPages::redirect('controller=ticket');		
	}
	return true;
}}