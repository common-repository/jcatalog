<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_api_controller extends WController {
	function api() {
				$pw = WPref::load( 'PEMAIL_NODE_ALLOWBYURLPWD' );
		if ( empty($pw) ) {
			return false;
		}		
		$key = WGlobals::get( 'key' );
		if ( $key != $pw ) {
			return false;
		}
				$type = WGlobals::get( 'type' );
		if ( empty($type) ) return false;
				$api = WClass::get( 'mailbox.' . $type );
		if ( empty($api) ) return false;
		$api->process();
		return true;
	}
}