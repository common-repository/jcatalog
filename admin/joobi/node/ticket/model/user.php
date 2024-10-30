<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WLoadFile( 'users.model.node' );
class Ticket_User_model extends Users_Node_model {
function addValidate(){
	$this->username = trim( $this->username );
	$this->rolid = WRole::getRole( 'visitor' );
	$this->setProcessConfirmation(false);
	return parent::addValidate();
}
}