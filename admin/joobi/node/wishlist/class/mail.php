<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Wishlist_Mail_class extends WClasses {
	public function emailWishList($uid,$wlid) {
		$mail = WMail::get();
		$downloadInfo = new stdClass;
		$downloadInfo->friendName = $uid->name;
		$downloadInfo->share = WUsers::get( 'name' );
				$link = WPages::linkHome( 'controller=wishlist-users-items&wlid=' . $wlid . '&titleheader=' . WUsers::get( 'username' ) );
		$downloadInfo->link = '<a href="' . $link . '">' . WText::t('1244448970SMQL') . '</a>';
		$mail->setParameters( $downloadInfo );
		$mailStatus = $mail->sendNow( $uid, 'wishlist_share', true );
	}
}