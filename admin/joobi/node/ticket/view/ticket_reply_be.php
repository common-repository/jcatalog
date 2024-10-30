<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Ticket_reply_be_view extends Output_Forms_class {
	function prepareQuery() {
		$greeting = WPref::load( 'PTICKET_NODE_GREETING' );
		if ( !empty($greeting) ) {
			$greeting = nl2br( $greeting );
			$greeting = str_replace( '{agentName}', WUsers::get( 'name' ), $greeting );
			$greeting = str_replace( '{agentFirstName}', WUsers::get( 'firstName' ), $greeting );
			$tkid = WGlobals::get( 'tkid' );
			$uid = WModel::getElementData( 'ticket', $tkid, 'authoruid' );
			if ( !empty($uid) ) {
				$customerName = WUsers::get( 'name', $uid );
				$customerFirstName = WUsers::get( 'firstName', $uid );
			} else {
				$customerName = '';
			}			$greeting = str_replace( '{customerName}', $customerName, $greeting );
			$greeting = str_replace( '{customerFirstName}', $customerFirstName, $greeting );
			WGlobals::set( 'description', $greeting );
		}	
		return true;
	}	
}