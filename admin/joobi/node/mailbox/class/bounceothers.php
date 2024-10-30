<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Bounceothers_class extends Mailbox_Mailbox_class {
	static private $ruleA = array();
	public function process() {
		if ( empty(self::$ruleA) ) {
			$ruleDictionaryM = WModel::get( 'mailbox.ruledictionary' );
			$ruleDictionaryM->remember( 'ruleDictionary', true, 'Mailbox_node' );
			$ruleDictionaryM->whereNotIn( 'type', array( 5, 7 ) );
			$ruleDictionaryM->whereE( 'publish', 1 );
			$ruleDictionaryM->orderBy( 'core', 'DESC' );
			$ruleDictionaryM->orderBy( 'ordering', 'ASC' );
			$ruleDictionaryM->setLimit('5000');				self::$ruleA = $ruleDictionaryM->load( 'ol', array( 'words', 'searchin', 'type' ) );
			if ( empty(self::$ruleA) ) self::$ruleA = true;
		}		
		if ( true === self::$ruleA ) return true;
		$subject = $this->getSubject();
		$body = $this->getBody( true );
		$mailboxProcessC = WClass::get( 'mailbox.process' );
		$rule = $mailboxProcessC->searchForWords( $subject, $body, self::$ruleA );
		if ( empty($rule) ) return true;
				$this->rule = $rule;
						$email = '';
		$uid = 0;
		$mailboxProcessC->getEmailFromBody( $body, $email, $uid );			
				$mgid = 0;
		$mailboxProcessC->getMailIDFromBody( $body, $mgid );
		if ( empty($email) ) {
			return true;
		}		
		switch( $rule ) {
			case 9;					
				$mailboxProcessHardC = WClass::get( 'mailbox.processhard' );
				$status = ( ! $mailboxProcessHardC->process( $email, 'spam', $mgid, $uid ) );
				$this->addReport( $mailboxProcessHardC->getReports() );
				return $status;			
				break;
			case 14;									
				return false;
				break;
			case 21;									
				return false;
				break;
			case 33;									return false;
				break;
			case 42;									return false;
				break;
			case 77;									
				return false;
				break;
			default:
				break;
		}		
		return false;
	}
}