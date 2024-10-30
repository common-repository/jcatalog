<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Type_model extends WModel {
	public function secureTranslation($sid,$eid) {
		$translationC = WClass::get( 'ticket.translation', null, 'class', false );
		if ( empty($translationC) ) return false;
		if ( !$translationC->secureTranslation( $this, $sid, $eid ) ) return false;
		return true;
	}	
}