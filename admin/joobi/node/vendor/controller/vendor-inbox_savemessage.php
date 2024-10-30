<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_inbox_savemessage_controller extends WController {
function savemessage() {
	$vendid = self::getFormValue( 'id' );
	$this->pid = self::getFormValue( 'pid' );
	$taskFrom = WGlobals::get( 'task_redirect' );
	if ( $taskFrom == 'readmessage' ) {
		$content = WController::getFormValue( 'content' );
		$mcUID = WController::getFormValue( 'receiveruid' );			if ( empty($mcUID) ) $mcUID = WController::getFormValue( 'uid' );
		$mcid = WController::getFormValue( 'mcid' );
		if ( empty($content) ) {
			$this->userN('1348175294RLLS');
			WPages::redirect( 'previous' );
			return true;
		} else {
			$title = $this->_getTitle( $mcid );
			$replyTitle = 'Re:'. $title;
			$currentTime = time();
			$conversationM = WModel::get( 'vendor.conversation' );
			$conversationM->title = $replyTitle;
			$conversationM->content = $content;
			if ( !empty($this->pid) ) {
				$conversationM->contentextra = WText::t('1242282447PGIE') . ': ' .  WModel::getElementData( 'item', $this->pid, 'name' );
			}
			$conversationM->top = $mcid;
			$conversationM->parent = $mcid;
			$conversationM->created = $currentTime;
			$conversationM->modified = $currentTime;
			$conversationM->uid = WUser::get( 'uid' );
			$conversationM->receiveruid = $mcUID;
			$conversationM->returnId( true );
			$conversationM->save();
						$mcUID = $conversationM->receiveruid;
			$getmcid = $conversationM->mcid;
			$conversationStatusM = WModel::get( 'vendor.conversationstatus' );
			$conversationStatusM->setVal( 'uid', $uid );
			$conversationStatusM->setVal( 'mcid', $getmcid );
			$conversationStatusM->setVal( 'isread', 1 );
			$conversationStatusM->insert();
			if ( !empty( $mcUID ) ) {
				$sendObj = new stdClass;
				$sendObj->sentToUID = $mcUID;
				$sendObj->title = $replyTitle;
				$sendObj->content = $content;
				$sendObj->datemodified = $currentTime;
				$sendObj->mcid = $getmcid;
				if ( ! $this->_sendToVendor( $sendObj ) ) {
					$messC = WMessage::get();
					$messC->historyE('1475178942CIDU');
				}
			}
		}
	} else {
		parent::save();
		$this->_model->returnId();
		$mcid = ( isset( $this->_model->mcid ) ) ? $this->_model->mcid : 0;
		if ( empty($mcid) ) $mcid = $this->_model->lastID();
		$sentToUID = ( isset( $this->_model->receiveruid ) ? $this->_model->receiveruid : 0 );
		if ( empty($sentToUID) ) $sentToUID = WUser::get( 'uid' );
		if ( !empty($mcid) ) {
			if ( !empty($this->pid) ) {
				$conversationM = WModel::get( 'vendor.conversation' );
				$conversationM->setVal( 'contentextra', WText::t('1242282447PGIE') . ': ' .  WModel::getElementData( 'item', $this->pid, 'name' ) );
				$conversationM->whereE( 'mcid', $mcid );
				$conversationM->update();
			}			
			$uid = ( isset( $this->_model->uid ) ) ? $this->_model->uid : WUser::get( 'uid' );
			$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
			$vendObj = $vendorHelperC->getVendor( $vendid );
			$vendUID = ( isset($vendObj->uid) ) ? $vendObj->uid : $uid;
			$conversationStatusM = WModel::get( 'vendor.conversationstatus' );
			$conversationStatusM->setVal( 'mcid', $mcid );
			$conversationStatusM->setVal( 'isread', 1 );
			$conversationStatusM->setVal( 'uid', $vendUID );
			$conversationStatusM->insert();
						if ( !empty( $sentToUID ) ) {
												$title = ( isset( $this->_model->title ) ) ? $this->_model->title : '';
				$content = ( isset( $this->_model->content ) ) ? $this->_model->content : '';
				$datemodified = ( isset( $this->_model->modified ) ) ? $this->_model->modified : 0;
				$sendObj = new stdClass;
				$sendObj->sentToUID = $sentToUID;
				$sendObj->title = $title;
				$sendObj->content = $content;
				$sendObj->datemodified = $datemodified;
				$sendObj->mcid = $mcid;
				if ( ! $this->_sendToVendor( $sendObj ) ) {
					$messC = WMessage::get();
					$messC->historyE('1475178942CIDU');
				}				
			}
						$this->userS('1263480766IEVJ');
		}
	}
	WPages::redirect( 'controller=vendor-inbox', true );
	return true;
}
private function _getTitle($mcid) {
	$conversationM = WModel::get( 'vendor.conversation' );
	$conversationM->whereE( 'mcid', $mcid);
	$title = $conversationM->load( 'lr', 'title' );
	return $title;
}
	private function _sendToVendor($sendObj) {
		$sentToUID = ( isset( $sendObj->sentToUID ) ? $sendObj->sentToUID : 0 );
		$title = ( isset( $sendObj->title ) ? $sendObj->title : '' );
		$content = ( isset( $sendObj->content ) ? $sendObj->content : '' );
		if ( empty($content) ) return false;
		$datemodified = ( isset( $sendObj->datemodified ) ) ? $sendObj->datemodified : 0;
		$mcid = ( isset( $sendObj->mcid ) ) ? $sendObj->mcid : 0;
		if ( !isset($vendorHelperC) ) $vendorHelperC = WClass::get('vendor.helper',null,'class',false);
		$sentVendid = $vendorHelperC->getVendorID( $sentToUID );
		$link = WPage::routeURL( 'controller=vendor-inbox&task=readmessage&eid='. $mcid .'&titleheader='. $title . '&id=' . $sentVendid .'&read=1&dtid='. $datemodified, 'home' );
		$text = WText::t('1263800691NRTE') .' <a href="'. $link .'">'. WText::t('1263800691NRTF') .'</a>';
				$currentUser = WUser::get( 'data' );
		$mailParams = new stdClass;
		$mailParams->title = ( !empty($title) ? $title : WText::t('1475178942CIDV') );
		$mailParams->content = $content;
		$mailParams->replyLink = $text;
		$mailParams->senderName = WUser::get( 'name' );
		$mailParams->senderEmail = WUser::get( 'email' );
		$mailParams->senderUsername = WUser::get( 'username' );
		if ( !empty($this->pid) ) {
			$mailParams->itemName = WModel::getElementData( 'item', $this->pid, 'name' );
		} else {
			$mailParams->itemName = '';
		}		
		$mailM = WMail::get();
		$mailM->setParameters( $mailParams );
		$mailM->sendNow( $sentToUID, 'vendors_private_message' );
		return true;
	}
}