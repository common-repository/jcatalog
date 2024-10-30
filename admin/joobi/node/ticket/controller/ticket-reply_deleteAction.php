<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_reply_deleteAction_controller extends WController {
function deleteAction(){
	parent::delete();
	$tkid=WGlobals::get('tkid');
	$type=WGlobals::get('tktypeid');
	$priority=WGlobals::get('priority');
	WPages::redirect( 'controller=ticket-reply&tkid='. $tkid.'&tktypeid='. $type. '&priority='. $priority );
	return true;
}
}