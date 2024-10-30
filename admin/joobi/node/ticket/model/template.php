<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Template_model extends WModel {
function validate(){
	if ( empty($this->tktypeid) ) {
		$this->tktypeid = 110;			
	}
	return true;
}}