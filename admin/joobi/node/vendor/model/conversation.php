<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_Conversation_model extends WModel {
	function validate() {
		$receiverid = WController::getFormValue( 'id' );
		if ( empty($receiverid) ) $receiverid = WController::getFormValue( 'receiverid' );
		if ( !empty( $receiverid) ) $this->receiveruid = $receiverid;
		return true;
	}
}