<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_bounceses_class extends Mailbox_Mailbox_class {
	private $_uid = 0;
	public function process() {
		$subject = $this->getSubject();
		$sender = $this->getInformation( 'sender_email' );
		$this->rule = 0;
		$this->_uid = WUsers::get( 'uid' );
						if ( strpos( $subject, 'AWS Notification Message' ) !== false ) {
			$body = $this->getBody( true );
			$pattern = '
/
\{
 (?:
 [^{}]
 |
 (?R)
 )*
\}
/x
';
			$resultA = array();
			preg_match_all( $pattern, $body, $resultA );
			if ( !isset($resultA[0]) || empty($resultA[0]) ) {
				return true;
			}			
		} elseif ( !empty($sender) && 'mailer-daemon@amazonses.com' == strtolower($sender) ) {
						$myEmail = '';
			$uid = 0;
			$body = $this->getBody( true );
						preg_match_all('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', $body, $potentialEmailsA, PREG_SET_ORDER );
			if ( !empty( $potentialEmailsA[0][0] ) ) {
				$myEmail = $potentialEmailsA[0][0];
			} else {
				return true;
			}			
			if ( empty($myEmail) ) return true;
									return $this->_processBounce( $myEmail, 'Permanent' );			
		} else {
			return true;
		}		
		$hasJSON = false;
		$status = true;
		foreach( $resultA[0] as $mess ) {
			$jsonO = json_decode( $mess );
			if ( empty($jsonO) ) continue;
			$notificationType = trim( $jsonO->notificationType );
			switch( $notificationType ) {
				case 'Bounce':
					if ( empty($bounceO->bouncedRecipients[0]->emailAddress) ) {
												return true;
					}					$status = $this->_processBounce( $bounceO->bouncedRecipients[0]->emailAddress, $bounceO->bounceType ) && $status;
					$hasJSON = true;
					break;
				case 'Complaint':
					if ( empty($this->rule) ) $this->rule = 7;
					$hasJSON = true;
					break;
				case 'Delivery':
					$this->rule = 5;
					$hasJSON = true;
					break;
				default:
					break;
			}					
		}
		if ( $resultA[0] > 1 && $hasJSON ) {
			return $status;	
		}		
		return true;
	}
	public function _processBounce($EMAIL,$bounceType) {
		$EMAIL = trim( $EMAIL );
		switch( $bounceType ) {
			case 'Transient':
				if ( empty($this->rule) ) $this->rule = 7;
				if ( $this->_uid ) $this->userN('1449105542AKFJ',array('$EMAIL'=>$EMAIL));
								$mailboxProcessHardC = WClass::get( 'mailbox.processsoft' );
				return ( ! $mailboxProcessHardC->process( $EMAIL ) );
				break;
			case 'Permanent':
			default:
				$this->rule = 5;
								if ( $this->_uid ) $this->userW('1449105542AKFK',array('$EMAIL'=>$EMAIL));
				$mailboxProcessHardC = WClass::get( 'mailbox.processhard' );
				return ( ! $mailboxProcessHardC->process( $EMAIL ) );
				break;
		}		
	}
}