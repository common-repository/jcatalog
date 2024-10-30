<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Processsoft_class extends WClasses {
	public function process($email,$mgid=0,$uid=0,$time=0) {
		if ( empty($email) ) {
			return false;
		}		
				$usersM = WModel::get( 'users' );
		$usersM->whereE( 'email', $email );
		$usersM->where( 'status', '<', 40 );
		$usersM->setVal( 'status', 30 );
		$usersM->update();
		if ( !empty($mgid) ) {
			if ( empty($uid) ) $uid = WUser::get( 'uid', $email );
			$emailStatisticsC = WClass::get( 'email.statistics' );
			$emailStatisticsC->recordActions( 'bounced', $mgid, $uid, $time );
		}		
				if ( WExtension::exist( 'mailing.node' ) ) {
			$this->processSoftMain( $email, $type );
		}		
		if ( WApplication::isEnabled( 'jnews' ) ) {
			$this->_process_jNews( $email );
		}		
		return true;
	}
	private function processSoftMain($email) {
		return true;
				$EMAILQueueM = WModel::get( 'email.queue' );
		$EMAILQueueM->whereE( 'uid', $uid );
		$EMAILQueueM->where( 'attempt', '>', 1 );
		$EMAILQueueM->where( 'status', '<', 9 );
		$EMAILQueueM->count();
		if ( $daysDelay > WPref::load( 'PMAILBOX_NODE_SOFTATTEMPTPERIOD' ) ) {
						$hasActivity = false;
			$period = ( $hasActivity ? WPref::load( 'PMAILBOX_NODE_SOFTATTEMPTACTIVE' ) : WPref::load( 'PMAILBOX_NODE_SOFTATTEMPTINACTIVE' ) );
			if ( $returnedInfos->total > $period ) {
			} else {
							}				
		} else {
		}	
				return true;
	}	
	private function _process_jNews($email) {
		return true;
		if ( $daysDelay > WPref::load( 'PMAILBOX_NODE_SOFTATTEMPTPERIOD' ) ) {
						$hasActivity = false;
			$period = ( $hasActivity ? WPref::load( 'PMAILBOX_NODE_SOFTATTEMPTACTIVE' ) : WPref::load( 'PMAILBOX_NODE_SOFTATTEMPTINACTIVE' ) );
			if ( $returnedInfos->total > $period ) {
								$mailboxProcessHardC = WClass::get( 'mailbox.processhard' );
				$mailboxProcessHardC->processHardjNews( $email );
			} else {
							}					
		} else {
		}		
				return true;
	}	
	public function getReports() {
		return $this->_reports;
	}	
}