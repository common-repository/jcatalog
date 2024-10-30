<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Emptytrashbox_scheduler extends Scheduler_Parent_class {
	function process() {
					$delFrequency = WPref::load( 'PMAILBOX_NODE_TRASHDELMSG' );
				$deleteFrq = ( $delFrequency < 86400 ? $delFrequency*86400 : $delFrequency );
		if ( !empty($delFrequency) ) {
						$mailboxMessagesM = WModel::get( 'mailbox.messages' );
			$mailboxMessagesM->noValidate();
			$mailboxMessagesM->where( 'created', '<', time() - $deleteFrq );
			$mailboxMessagesM->whereE( 'box', 30 );
			$mailboxMessagesM->delete();
		}
		$deleteStatsDays = WPref::load( 'PMAILBOX_NODE_DELETESTATS' );
		$deleteMsgDays = WPref::load( 'PMAILBOX_NODE_DELETEMSG' );
				$deleteStatsDays = ( $deleteStatsDays < 86400 ? $deleteStatsDays*86400 : $deleteStatsDays );
		$deleteMsgDays = ( $deleteMsgDays < 86400 ? $deleteMsgDays*86400 : $deleteMsgDays );
		if ( $deleteStatsDays < 7 ) $deleteStatsDays = 7;
		if ( $deleteMsgDays < 7 ) $deleteMsgDays = 7;
				if ( !empty($deleteMsgDays) ) {
			$handleModel = WModel::get( 'mailbox.messages' );
			$handleModel->where( 'created', '<', time() - $deleteMsgDays );				$handleModel->delete();
		}		
		return true;
	}
}