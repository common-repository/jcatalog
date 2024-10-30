<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_savereg_controller extends WController {
function savereg() {
	if ( !PTICKET_NODE_NOREGISTERED ) return false;
		$captchaToolsC = WClass::get( 'main.captcha' );
	if ( !$captchaToolsC->checkProcedure( WPref::load( 'PUSERS_NODE_USECAPTCHA' ) ) ) return false;
	$trk = WGlobals::get( JOOBI_VAR_DATA, array(), '', 'array' );
	$ticketModelID = WModel::get('ticket.reply', 'sid');
	$email = $trk[$ticketModelID]['x']['email'];
	$email = trim( $email );
	$ticketUserM = WModel::get('ticket.user');
	$ticketUserM->whereE( 'email' , $email );
	$uid = $ticketUserM->load('lr', 'uid');
	if ( empty($uid) ) {	
		$message = WMessage::get();
		return $message->historyE('1274840559DZKC');
		return false;
	}
	$trk[$ticketModelID]['authoruid'] = $uid;
	WGlobals::set( JOOBI_VAR_DATA, $trk );
	WGlobals::setEID( 0 );
	parent::save();
	WPages::redirect('controller=ticket');
}}