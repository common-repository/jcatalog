<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Wishlist_Listid_filter {
	function create() {
		$type = WGlobals::get( 'type', 'favorite' );
		switch( $type ) {
			case 'watch':
				$id = 10;
				break;
			case 'wish':
				$id = 30;
				break;
			case 'favorite':
			default:
				$id = 20;
				break;
		}
		$uid = WUser::get( 'uid' );
		if ( empty($uid) ) {
			$message = WMessage::get();
			$message->exitNow( 'Unauthorized access 553' );
		}		
		$wishlistM = WModel::get( 'wishlist' );
		$wishlistM->whereE( 'authoruid', $uid );
		$wishlistM->whereE( 'type', $id );
		$wlid = $wishlistM->load( 'lr', 'wlid' );
		return $wlid;
	}	
}