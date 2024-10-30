<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Processhard_class extends WClasses {
	private $_reports = array();
	private $_blockedEmailA = array();
	public function process($email,$type='hard',$mgid=0,$uid=0,$time=0) {
		if ( empty($email) ) {
			return false;
		}		
				$usersM = WModel::get( 'users' );
		$usersM->whereE( 'email', $email );
		$usersM->setVal( 'status', 40 );
		$usersM->update();
		if ( !empty($mgid) ) {
			if ( empty($uid) ) $uid = WUser::get( 'uid', $email );
			$emailStatisticsC = WClass::get( 'email.statistics' );
			$emailStatisticsC->recordActions( 'bounced', $mgid, $uid, $time );
		}		
				if ( WExtension::exist( 'mailing.node' ) ) {
			$this->processHardMain( $email, $type );
		}		
		if ( WApplication::isEnabled( 'jnews' ) ) {
			$this->processHardjNews( $email, $type );
		}			
		return true;
	}
	public function processHardMain($EMAIL,$type) {
		$TYPEPREF = strtoupper( $type );
		$unsubscribe = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERUNSUBSCRIBE' );			$delete = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERDELETE' );			if ( WExtension::get( 'mailing.node' ) ) {
			$subscribe = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERSUBSCRIBENEW' );			} else {
			$subscribe = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERSUBSCRIBE' );			}	
		$uid = WUser::get( 'uid', $EMAIL );
		$registerd = WUser::get( 'registered', $EMAIL );
		if ( $registerd ) {
			$block = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERBLOCKREG' );			} else {
			$block = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERBLOCK' );			}		
		$unconfirm = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERUNCONFIRM' );		
				if ( ! $unsubscribe && ! $delete && ! $subscribe && !$block ) {				$delete = true;
		}	
				if ( empty($uid) ) {
			$this->addReport( str_replace(array('$EMAIL'), array($EMAIL),WText::t('1494976816RTCF')) );
			return true;
		}	
				if ( $unsubscribe || $delete || $block ) {						
			$EMAILQueueM = WModel::get( 'email.queue' );
			$EMAILQueueM->whereE( 'uid', $uid );
			$EMAILQueueM->where( 'status', '<', 9 );
			$EMAILQueueM->delete();
									if ( $unsubscribe && ! $delete ) {
				$this->addReport( str_replace(array('$EMAIL'), array($EMAIL),WText::t('1494976816RTCG')) );
			}			
		}	
				if ( ( $block || $unsubscribe) && ! $delete ) {					
									$listMembersM = WModel::get( 'list.members' );
						$listMembersM->whereE( 'uid', $uid );
			$listMembersM->whereE( 'subscribed', 1 );
			$unsusbcribeA = $listMembersM->load( 'lra' );
			if ( !empty($unsusbcribeA) ) {
				$listSusbcribersC = WClass::get( 'list.subscribers' );
				$status = $listSusbcribersC->updateSubscriptions( $uid, array(), $unsusbcribeA, false );
			}						
			$campaignMembersM = WModel::get( 'campaign.members' );
			$campaignMembersM->whereE( 'uid', $uid );
			$campaignMembersM->whereE( 'subscribed', 1 );
			$unsusbcribeA = $campaignMembersM->load( 'lra' );
			if ( !empty($unsusbcribeA) ) {
				$campaignSusbcribersC = WClass::get( 'campaign.subscribers' );
				foreach( $unsusbcribeA as $campaiID ) {
					$status = $campaignSusbcribersC->oneSubscription( $uid, $campaiID, false );
				}			
			}			
			if ( $unconfirm ) {
				$usersM = WModel::get( 'users' );
				$usersM->setVal( 'confirmed', 0 );
				$usersM->whereE( 'uid', $uid );
				$usersM->update();
				$this->addReport(str_replace(array('$EMAIL'), array($EMAIL),WText::t('1494976816RTCH')) );
			}		
			if ( $block && !isset($this->_blockedEmailA[$EMAIL]) ) {
				$this->_blockedEmailA[$EMAIL] = true;
								$uid = WUser::get( 'uid', $EMAIL );
				$usersAddon = WClass::get( 'users.api' );
				$usersAddon->blockUser( 1, $uid, true, WText::t('1456969706OIHT') );
				$this->addReport( str_replace(array('$EMAIL'), array($EMAIL),WText::t('1494976816RTCI')) );
			}			
		}	
				if ( $delete ) {
			$usersM = WModel::get( 'users' );
			$usersM->whereE( 'uid', $uid );
			$usersM->delete();
			$this->addReport(str_replace(array('$EMAIL'), array($EMAIL),WText::t('1494976816RTCJ')) );
			$this->deleteMessage = true;
			return false;
		} elseif ( $subscribe ) {
			$listSusbcribersC = WClass::get( 'list.subscribers' );
			$status = $listSusbcribersC->oneSubscription( $uid, $subscribe, true );
			$LISTNAME = WModel::getElementData( 'list', $subscribe, 'name' );
			$this->addReport( str_replace(array('$EMAIL','$LISTNAME'), array($EMAIL,$LISTNAME),WText::t('1241989757SUSF')) );
			$this->deleteMessage = true;
			return false;
		}	
	}	
	public function processHardjNews($EMAIL,$type) {
		$TYPEPREF = strtoupper( $type );
						$unsubscribe = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERUNSUBSCRIBE' );			$delete = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERDELETE' );			if ( WExtension::get( 'mailing.node' ) ) {
			$subscribe = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERSUBSCRIBENEW' );			} else {
			$subscribe = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERSUBSCRIBE' );			}		
		$block = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERBLOCK' );			$unconfirm = WPref::load( 'PMAILBOX_NODE_' . $TYPEPREF . 'USERUNCONFIRM' );			
				if ( ! $unsubscribe && ! $delete && !$subscribe && !$block ) {				$delete = true;
		}		
		$jnewsQueueM = WModel::get('jnews.queue'); 				$jnewsSubscriberM= WModel::get('jnews.subscribers'); 				$jnewsListSubsM = WModel::get('jnews.listssubscribers'); 				$jnewsListM = WModel::get('jnews.lists');		$jnewsMailingsM = WModel::get('jnews.mailings');		$jnewsStatsM = WModel::get('jnews.statsdetails'); 		$jnewsXonfigM = WModel::get('jnews.xonfig'); 		
		$jnewsSubscriberM->whereE('email',$EMAIL);
		$jnewsID = $jnewsSubscriberM->load('lr',array('id'));
				if (empty($jnewsID)) {
			$this->addReport(str_replace(array('$EMAIL'), array($EMAIL),WText::t('1267609148IZFT')));
			return true;
		}		
				if ( $unsubscribe || $delete || $block ) {				
			$jnewsQueueM->whereE( 'subscriber_id', $jnewsID );
						$jnewsQueueM->delete();
									if ($unsubscribe && !$delete) {
				$this->addReport( str_replace(array('$EMAIL'), array($EMAIL),WText::t('1298388578RGBW')) );
			}			
		}		
				if ( ( $block || $unsubscribe) && ! $delete ) {								if ( $unsubscribe ) {
				$jnewsListSubsM->setVal('unsubscribe',1);
				$jnewsListSubsM->setVal('unsubdate', time());
				$jnewsListSubsM->whereE('subscriber_id',$jnewsID);
				$jnewsListSubsM->update();
			}		
			if ( $unconfirm ) {
				$jnewsSubscriberM->setVal('confirmed',0);
				$jnewsSubscriberM->whereE('id',$jnewsID);
				$jnewsSubscriberM->update();
				$this->addReport(str_replace(array('$EMAIL'), array($EMAIL),WText::t('1267609148IZFV')));
			}		
			if ( $block ) {
				$jnewsSubscriberM->setVal('blacklist',1);
				$jnewsSubscriberM->whereE('id',$jnewsID);
				$jnewsSubscriberM->update();
				if ( !isset($this->_blockedEmailA[$EMAIL]) ) {
					$this->_blockedEmailA[$EMAIL] = true;
										$uid = WUser::get( 'uid', $EMAIL );
					$usersAddon = WClass::get( 'users.api' );
					$usersAddon->blockUser( 1, $uid, true, WText::t('1456969706OIHT') );
				}		
				$this->addReport( str_replace(array('$EMAIL'), array($EMAIL),WText::t('1267609148IZFW')) );
			}
		}		
				if ( $delete ) {
						$jnewsStatsM->whereE('subscriber_id',$jnewsID);
			$jnewsStatsM->delete();
						$jnewsSubscriberM->whereE('id',$jnewsID);
			$jnewsSubscriberM->delete();
						$jnewsListSubsM->whereE('subscriber_id',$jnewsID);
			$jnewsListSubsM->delete();
						$jnewsXonfigM->whereE('akey','act_totalsubcribers0');
			$jnewsXonfigM->updatePlus('value',-1);
			$jnewsXonfigM->update();
			$this->addReport(str_replace(array('$EMAIL'), array($EMAIL),WText::t('1267609148IZFX')));
			$this->deleteMessage = true;
			return false;
		} elseif ( $subscribe ) {
						$jnewsListM->whereE( 'id', $subscribe );
			$jnewsList = $jnewsListM->load('o',array('id','acc_level','list_type','list_name'));
						$jnewsMailingsM->makeLJ('jnews.listmailings','id','mailing_id');
			$jnewsMailingsM->whereE('list_id',$jnewsList->id,1);
			$jnewsMailingsM->where('send_date','!=',time());
			$jnewsMailingsM->where('send_date','>',time());
			$jnewsmailing=$jnewsMailingsM->load('o',array('id','mailing_type','send_date'));
			if (!empty($jnewsList)) {
								$jnewsListSubsM->whereE('subscriber_id',$jnewsID);
				$jnewsListSubsM->whereE('list_id',$jnewsList->id);
				$sublist=$jnewsListSubsM->load('o');
								if (!empty($sublist) && $sublist->unsubscribe) {
										$jnewsListSubsM->setVal('unsubscribe',0);
					$jnewsListSubsM->whereE('list_id',$jnewsList->id);
					$jnewsListSubsM->whereE('subscriber_id',$jnewsID);
					$jnewsListSubsM->setVal('subdate',time());
					$jnewsListSubsM->update();
				} else {
										$jnewsListSubsM->setVal('subscriber_id',$jnewsID);
					$jnewsListSubsM->setVal('list_id',$jnewsList->id);
					$jnewsListSubsM->setVal('subdate',time());
					$jnewsListSubsM->insertIgnore();
				}		
				$columnsToInsert=array();
				$rows=array('subscriber_id','type','mailing_id','send_date');
								if ($jnewsList->list_type==2) {
					if (!empty($jnewsmailing)) {
						foreach($jnewsmailing as $key=>$mailing) {
							$columnsToInsert[$key]->subscriber_id=$mailing->subscriber_id;
							$columnsToInsert[$key]->type=$mailing->type;
							$columnsToInsert[$key]->mailing_id=$mailing->mailing_id;
							$columnsToInsert[$key]->send_date=$mailing->send_date;
						}						$jnewsQueueM->insertMany($rows,$columnsToInsert);
					}				}		
				$LISTNAME = $jnewsList->list_name;
				$this->addReport(str_replace(array('$EMAIL','$LISTNAME'), array($EMAIL,$LISTNAME),WText::t('1241989757SUSF')));
				$this->deleteMessage = true;
				return false;
			}		
		}		
	}	
	public function addReport($report) {
		if ( empty($report) ) return;
		if ( is_array($report) ) $this->_reports = array_merge( $this->_reports, $report );
		else $this->_reports[] = (string) $report;
	}	
	public function getReports() {
		return $this->_reports;
	}	
}