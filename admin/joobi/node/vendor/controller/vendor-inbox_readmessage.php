<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_inbox_readmessage_controller extends WController {
function readmessage() {
	$mcid = WGlobals::getEID();
	$isread = WGlobals::get( 'read' );
	$skip = WGlobals::get( 'skip' );
		$uid = WUser::get( 'uid' );
	$receiveruid = self::getFormValue( 'receiveruid' );
	$conversationM = WModel::get( 'vendor.conversation' );
	$conversationM->whereE( 'mcid', $mcid );
	$conversationM->openBracket();
	$conversationM->whereE( 'uid', $uid );
	$conversationM->operator( 'OR' );
	$conversationM->whereE( 'receiveruid', $uid );
	$conversationM->closeBracket();
	$receiveruidQuery = $conversationM->load( 'o', array( 'uid', 'receiveruid' ) );
	if ( empty($receiveruidQuery) ) return false;
	if ( $uid == $receiveruidQuery->uid ) $receiveruid = $receiveruidQuery->receiveruid;
	if ( $uid == $receiveruidQuery->receiveruid ) $receiveruid = $receiveruidQuery->uid;
	if ( empty($receiveruid) ) return false;
	if ( empty($skip) ) {
		if ( !empty($isread) ) {
			$conversationStatusM = WModel::get( 'vendor.conversationstatus' );
			$conversationStatusM->setVal( 'isread', 0 );
			$conversationStatusM->whereE( 'mcid', $mcid );
			$conversationStatusM->update();
		}
		if ( !empty($mcid) ) {
			$conversationM = WModel::get( 'vendor.conversation' );
			$conversationM->whereE( 'mcid', $mcid );
			$result = $conversationM->load( 'lr', 'parent' );
			if ( !empty($result) ) {
				$vendid = WGlobals::get( 'id' );
				$dtid = WGlobals::get( 'dtid' );
				$titleheader = WGlobals::get( 'titleheader' );
				if ( !isset($conversationM) ) $conversationM = WModel::get( 'vendor.conversation' );
				$conversationM->whereE( 'mcid', $mcid );
				$repUID = $conversationM->load( 'lr', 'uid' );
				WPages::redirect( 'controller=vendor-inbox&task=readmessage&eid='. $mcid .'&titleheader='. $titleheader .'&id='. $receiveruid .'&receiveruid='. $receiveruid .'&dtid='. $dtid .'&read=0&skip=1' , true );
			}
		}		
	}
	return true;
}
}