<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Handle_class extends WClasses {
	var $report = true;
	var $_reports = array();
	var $maxtime = 0;		var $finishProcessing = false;
	public function processMailbox($mailboxO=null) {
						if ( empty($mailboxO) ) {
			$mailbox = WModel::get( 'mailbox' );
			$mailbox->rememberQuery( true, 'Mailbox_node' );
			$mailbox->whereE( 'publish', 1 );
			$mailbox->orderBy( 'ordering', 'ASC' );
			$mailboxesA = $mailbox->load( 'ol' );
		} else {
			$mailboxesA = array( $mailboxO );
		}
		if ( empty($mailboxesA) ) return true;
		$message = WMessage::get();
				if ( empty($this->maxtime) ) {
						$maxexectime = ini_get( 'max_execution_time' );
						if ( empty($maxexectime) ) $maxexectime = 40;
			$this->maxtime = time() + $maxexectime - 10;
		}
		WGlobals::set( 'noHistoryRedirect', true, 'global' );
				foreach( $mailboxesA as $mailboxO ) {
			$this->displayReports();
						if ( !$this->continueProcess() ) {
				$this->addReport( WText::t('1389656700JZFI') );
				break;
			}
			$connection = $this->connect( $mailboxO );
			$MAILBOX_NAME = $mailboxO->name;
			if ($connection === false){
				$this->addReport( str_replace(array('$MAILBOX_NAME'), array($MAILBOX_NAME),WText::t('1242580111TAIP')) );
				continue;
			}			else{
				$this->addReport( str_replace(array('$MAILBOX_NAME'), array($MAILBOX_NAME),WText::t('1242580111TAIQ')) );
			}
						$connectorO =& $connection->getConnector();
						$connection->checkAllMessages();
			WLoadFile( 'mailbox.class.mailbox' );
			$widgetMailboxA = array();
			$widgetMailboxA['integration_ses'] = 'mailbox.bounceses';
			$widgetMailboxA['hardbounce'] = 'mailbox.bouncehard';
			$widgetMailboxA['softbounce'] = 'mailbox.bouncesoft';
			$widgetMailboxA['otherules'] = 'mailbox.bounceothers';
			$widgetMailboxA['integration_ticketreply'] = 'ticket.email2reply';
			$widgetMailboxA['integration_ticket'] = 'ticket.email2ticket';
			WTools::getParams( $mailboxO );
			static $allMessageIDA = array();
			$runOutOfTime = false;
						$mesageA = $connection->getMessage();
			while( $mesageA !== false ) {
				$messID = $connection->getMessageId();
				if ( isset($allMessageIDA[$messID]) ) break;
				$allMessageIDA[$messID] = true;
				$deleteMessage = false;
				$saveReport = ( !empty($mailboxO->savereport) || WPref::load( 'PMAILBOX_NODE_LOGREPORT' ) );
				$rule = 0;
				foreach( $widgetMailboxA as $property => $class ) {
					if ( empty($mailboxO->$property) ) continue;
															$actionC = WClass::get( $class );
					$actionC->setConnector( $connection->getConnector() );
															$actionC->report = $this->report;
					$actionC->ignoredEmail( $mailboxO->username );
					$continueProcessing = $actionC->process();
					if ( $saveReport ) $this->addReport( $actionC->getReports() );
										if ( ! $continueProcessing ) {
						$deleteMessage = $deleteMessage || $actionC->deleteMessage;
						$rule = $actionC->rule;
						break;
					}					
				}				
				$box = 1;					
				if ( $saveReport ) $SUBJECT = $connection->getSubject();
								if ( empty($rule) ) $rule = 100;
												if ( !empty($mailboxO->savemessage) && empty($deleteMessage) ) {
										if ( 2 == $mailboxO->savemessage  || ( 100 == $rule && 1 == $mailboxO->savemessage ) ) {
						$mailboxMessage = WModel::get( 'mailbox.messages' );
						$mailboxMessage->setVal( 'inbid', $mailboxO->inbid );
						$mailboxMessage->setVal( 'subject', $connection->getSubject() );
						$mailboxMessage->setVal( 'header', $connection->getInformation('headerstring') );
						$mailboxMessage->setVal( 'body', $connection->getBody());
						$mailboxMessage->setVal( 'created',time() );
						$mailboxMessage->setVal('type', $rule );
						if ( !empty($box) ) $mailboxMessage->setVal('box', $box );
						$mailboxMessage->setVal( 'sender', $connection->getInformation( 'bouncedemail', $connection->getInformation('sender_email') ) );
						$mailboxMessage->insertIgnore();
						$connectorO->mgsid = $mailboxMessage->lastID();
						if ( $saveReport ) $this->addReport( str_replace(array('$SUBJECT'), array($SUBJECT),WText::t('1448582282BAKU')) );
											}					
				}				
								if ( empty($deleteMessage) && !empty($mailboxO->forward) ) {						
					$FORWARDEMAIL = $mailboxO->forward;
					$forwardMessage = WMail::get();
					$forwardMessage->addParameter('subject',$connection->getSubject());
					$forwardMessage->addParameter('body',$connection->getBody());
					$forwardMessage->addParameter($connection->getInformation());
					$forwardMessage->addSender($connection->getInformation('from_email'),$connection->getInformation('from_name'));
					$forwardMessage->replyTo($connection->getInformation('reply_to_email'),$connection->getInformation('reply_to_name'));
					$forwardStatus = $forwardMessage->sendNow( $FORWARDEMAIL, 'mailbox_forward_email', false );
					if ( $saveReport ) {
						if ( $forwardStatus ) {
							$this->addReport( 'Message ' . $SUBJECT . ' forwarded to ' . $FORWARDEMAIL );							} else {
							$this->addReport( 'Could not forward the message ' . $SUBJECT . ' to ' . $FORWARDEMAIL );							}					}				}				
								if ( !empty($mailboxO->deletemsg) ) {
					if ( $connectorO->deleteMSG() ) {
						if ( $saveReport )  $this->addReport(str_replace(array('$SUBJECT'), array($SUBJECT),WText::t('1418159587ECXK')));
					} else {
						if ( $saveReport ) {
							$this->addReport( str_replace(array('$SUBJECT'), array($SUBJECT),WText::t('1418159587ECXJ')) );
							$errors = $connectorO->getErrors();
							if ( !empty($errors) ) {
								foreach( $errors as $error ) {
									$this->addReport( $error );
								}							}								
						}						
					}					
				}
								if ( ! $this->continueProcess() ) {
					if ( $saveReport) $this->addReport( WText::t('1389656700JZFI') );
					$runOutOfTime = true;
					break;
				}
								$mesageA = $connection->getMessage();
			}
						$connectorO->disconnect();
			if ( $runOutOfTime ) break;
		}
		$this->displayReports();
	}
	public function displayReports(){
		if ( $this->report && !empty($this->_reports) ) {
			$message = WMessage::get();
			$entireMessage = '<ul><li>' . implode('</li><li>', $this->_reports) . '</li></ul>';
			$message->userN( $entireMessage );
			$this->_reports = array();
		}
	}
	public function continueProcess() {
		if ( time() >= $this->maxtime) return false;
		return true;
	}
	public function connect($mailboxO) {
		static $connection=null;
		if ($this->report){
			$message = WMessage::get();
			$NAME = $mailboxO->name;
		}
		if ( !isset($connection) ) $connection = WClass::get('mailbox.mailbox');
		$connection->report = $this->report;
		if ( !$connection->initialize( $mailboxO ) ) return false;
		if ( $this->report ) {
			$message->userS('1418159587ECXL',array('$NAME'=>$NAME));
						$NBMSG = $connection->getNumberOfMessages();
			$message->userN('1418159587ECXM',array('$NBMSG'=>$NBMSG,'$NAME'=>$NAME));
		}
		return $connection;
	}
	public function addReport($message){
		if ( empty($message) ) return;
		if ( is_array($message) ) $this->_reports = array_merge( $this->_reports, $message );
		else $this->_reports[] = $message;
	}
	public function getReports() {
		return $this->_reports;
	}
}