<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Commentfilter_filter {
function create() {
 	$value = array( 0,1 );	
	if (WGlobals::checkCandy(50)) {
		if ( WPref::load( 'PTICKET_NODE_TKUSECOMMENT' ) ) {		
			$value= array( 0,1,10 );
		}
	}
	return $value;
}}