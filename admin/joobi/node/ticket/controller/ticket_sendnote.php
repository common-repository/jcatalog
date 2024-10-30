<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_sendnote_controller extends WController {
function sendnote() {
	$tkidREF=WGlobals::get('tkid',null,'get' );
	if ($tkidREF!='') WGlobals::setSession( 'tickets', 'tkid', $tkidREF);
	return true;
}}