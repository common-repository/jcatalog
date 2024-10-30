<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Ticket_Trans_model extends WModel {
 	function addValidate() {
 		$this->description = str_replace( '<a ', '<a target="_blank" ', $this->description );
 		return true;
 	}
 	function validate() {
 		if ( !empty($this->name) ) {	
			$this->name = ucfirst( $this->name );
			return true;
 		} else {
 			$message= WMessage::get();
 			$message->codeE( 'The translation for your ticket have not been saved.' );
 			return false;
 		}
 	}
 }
