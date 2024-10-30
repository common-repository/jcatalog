<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Bouncesoft_class extends Mailbox_Mailbox_class {
	static private $ruleA = array();
	public function process() {
		if ( empty(self::$ruleA) ) {
			$ruleDictionaryM = WModel::get( 'mailbox.ruledictionary' );
			$ruleDictionaryM->remember( 'ruleDictionary', true, 'Mailbox_node' );
			$ruleDictionaryM->whereE( 'type', 7 );
			$ruleDictionaryM->whereE( 'publish', 1 );
			$ruleDictionaryM->orderBy( 'core', 'DESC' );
			$ruleDictionaryM->orderBy( 'ordering', 'ASC' );
			$ruleDictionaryM->setLimit('5000');				self::$ruleA = $ruleDictionaryM->load( 'ol', array( 'words', 'searchin', 'type' ) );
			if ( empty(self::$ruleA) ) self::$ruleA = true;
		}		
		if ( true === self::$ruleA ) return true;
		$subject = $this->getSubject();
		$body = $this->getBody(true);
		$mailboxProcessC = WClass::get( 'mailbox.process' );
		$rule = $mailboxProcessC->searchForWords( $subject, $body, self::$ruleA );
		if ( empty($rule) ) return true;
				$this->rule = $rule;
				$email = '';
		$uid = 0;
		$mailboxProcessC->getEmailFromBody( $body, $email, $uid );
		if ( empty($email) ) {
						return false;
		}		
		$mgid = 0;
		$mailboxProcessC->getMailIDFromBody( $body, $mgid );
				$mailboxProcessHardC = WClass::get( 'mailbox.processsoft' );
				$status = ( ! $mailboxProcessHardC->process( $email, $mgid, $uid ) );
		$this->addReport( $mailboxProcessHardC->getReports() );
		return $status;
	}
}