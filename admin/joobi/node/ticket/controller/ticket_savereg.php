<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_savereg_controller extends WController {
function savereg() {
	if ( !PTICKET_NODE_NOREGISTERED ) return false;
		$captchaToolsC = WClass::get( 'main.captcha' );
	if ( !$captchaToolsC->checkProcedure( WPref::load( 'PUSERS_NODE_USECAPTCHA' ) ) ) return false;
	$trk = WGlobals::get( JOOBI_VAR_DATA, array(), '', 'array' );
	$ticketModelID = WModel::get('ticket', 'sid');
	$email = '';
	if (!empty($trk)) {
		$email = $trk[$ticketModelID]['x']['email'];
		$name = $trk[$ticketModelID]['x']['name'];
	} else {
		return false;
	}
	if ( !isset($trk[$ticketModelID]['pjid']) ) $trk[$ticketModelID]['pjid'] = 2;
	$usersCredentialC = WUser::credential();
	$uid = $usersCredentialC->ghostAccount( $email, $name, true, null, null, true );
	$trk[$ticketModelID]['authoruid'] = $uid;
	WGlobals::set( JOOBI_VAR_DATA, $trk );
	WGlobals::setEID( 0 );
	parent::save();
	WPages::redirect('controller=ticket');
}}