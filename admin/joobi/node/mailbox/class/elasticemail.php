<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Elasticemail_class extends WClasses {
	public function process() {
		$email = WGlobals::get( 'to' );
		if ( empty($email) ) return false;
		$status = WGlobals::get( 'status' );
		if ( empty($status) ) return false;
		switch($status) {
			case 'Sent':
				break;
			case 'Opened':
				break;
			case 'Clicked':
				break;
			case 'Error':
				break;
			case 'AbuseReport':
				break;
			case 'Unsubscribed':
				break;
		}		
		$category = WGlobals::get( 'category' );			if ( empty($category) ) return false;
				switch( $category ) {
						case 'Ignore':
			case 'SPam':
			case 'BlackListed':
			case 'NoMailbox':
			case 'GreyListed':
				$mailboxProcessHardC = WClass::get( 'mailbox.processhard' );
				$mailboxProcessHardC->process( $email, 'hard' );
				break;
						case 'Throttled':
			case 'Timeout':
			case 'ConnectionProblem':
			case 'SPFProblem':
			case 'AccountProblem':
			case 'DNSProblem':
			case 'WhitelistingProblem':
			case 'CodeError':
			case 'ManualCancel':
			case 'ConnectionTerminated':
			case 'ContentFilter':
			case 'NotDelivered':
			case 'Unknown':
				$mailboxProcessHardC = WClass::get( 'mailbox.processsoft' );
				$mailboxProcessHardC->process( $email );
				break;
		}		
	}
}