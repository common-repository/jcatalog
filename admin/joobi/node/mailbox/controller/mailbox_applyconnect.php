<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Mailbox_Applyconnect_controller extends WController {
	function applyconnect() {
		parent::apply();
		$eid = WGlobals::getEID();
		if (empty($eid)) return true;
		$mymailbox = WModel::getElementData( 'mailbox', $eid );
		$mailbox = WClass::get('mailbox.handle');
		$mailbox->report = true;
		$connection = $mailbox->connect($mymailbox);
		return true;
	}
}