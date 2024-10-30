<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Wishlist_my_send_controller extends WController {
	function send() {
		$name = WController::getFormValue( 'name' );
		$email = WController::getFormValue( 'email' );
		$wlid = WController::getFormValue( 'wlid' );
		if ( empty($wlid) || empty($email) ) return false;
		$uid = WUser::get( 'uid', $email );
		if ( empty($uid) ) {
			$uid = new stdClass;
			$uid->email = $email;
			$uid->name = $name;
		}
		$couponsEmail = WClass::get( 'wishlist.mail' );
		$couponsEmail->emailWishList( $uid, $wlid );
		$EMAIL = $uid->email;
		$this->userS('1451225176NHNH',array('$EMAIL'=>$EMAIL));
		WPage::redirect( 'controller=wishlist-my&task=share&wlid=' . $wlid );
		return true;
	}	
}