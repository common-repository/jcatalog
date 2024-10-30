<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_inbox_deletemessage_controller extends WController {
function deletemessage() {
	$vendid = WGlobals::get( 'id' );
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$getID = $trk['s']['mid'];
	$modelID = ( !empty( $getID ) ) ? $getID : WModel::getID( 'vendor.conversation' );
	$map = 'mcid_'. $modelID;
	$mcidA = WGlobals::get( $map );
	if ( !empty($mcidA) ) {
		$conversationM = WModel::get( 'vendor.conversation' );
		$conversationToM = WModel::get( 'vendor.conversationto' );
		$conversationStatusM = WModel::get( 'vendor.conversationstatus' );
				$uid = WUser::get( 'uid' );
		$conversationM = WModel::get( 'vendor.conversation' );
		$conversationM->makeLJ( 'vendor.conversationto', 'mcid' );
		$conversationM->whereIn( 'mcid', $mcidA );
		$conversationM->whereE( 'uid', $uid, 1 );
		$sureMessageIdsA = $conversationM->load( 'lra', 'mcid' );
		$mcidA = $sureMessageIdsA;
		foreach( $mcidA as $mcid ) {
			$msgHaveChild = $this->_haveChild( $mcid );
			$msgHasParent = $this->_hasParent( $mcid );
			if ( !$msgHaveChild && !$msgHasParent ) {
				$this->_deleteMessage( 'vendor.conversation', $mcid );
				$this->_deleteMessage( 'vendor.conversationstatus', $mcid );
				$this->_deleteMessage( 'vendor.conversationto', $mcid );
			} else {
				$this->_tempDeleteMessage( $mcid );
				$foundChild = $this->_unremoveChildFound( $mcid );
				$foundParent = $this->_unremoveChildFound( $mcid );
				if ( !$foundChild && !$foundParent ) {
					$this->_deleteMessage( 'vendor.conversation', $mcid );
					$this->_deleteMessage( 'vendor.conversationstatus', $mcid );
					$this->_deleteMessage( 'vendor.conversationto', $mcid );
				}
			}
		}
	}
	$link = ( !empty($vendid) ) ? 'controller=vendor-inbox&task=listing&id='. $vendid : 'controller=vendor-inbox&task=listing';
	WPages::redirect( $link, true );
	return true;
}
private function _haveChild($mcid) {
	static $conversationM=null;
	if ( !isset($conversationM) ) $conversationM = WModel::get( 'vendor.conversation' );
	$conversationM->select( 'mcid', 0, null, 'count' );
	$conversationM->whereE( 'parent', $mcid );
	$result = $conversationM->load( 'lr' );
	$returnValue = ( !empty($result) && ( $result > 0 ) ) ? true : false;
	return $returnValue;
}
private function _hasParent($mcid) {
	static $conversationM=null;
	if ( !isset($conversationM) ) $conversationM = WModel::get( 'vendor.conversation' );
	$conversationM->select( 'parent' );
	$conversationM->whereE( 'mcid', $mcid );
	$result = $conversationM->load( 'lr' );
	$returnValue = ( !empty($result) ) ? true : false;
	return $returnValue;
}
private function _deleteMessage($modelName,$mcid) {
	static $modelA=array();
	if ( !isset( $modelA[$modelName] ) ) $modelA[$modelName] = WModel::get( $modelName );
	$modelA[$modelName]->whereE( 'mcid', $mcid );
	$modelA[$modelName]->delete();
	return true;
}
private function _tempDeleteMessage($mcid) {
	static $conversationToM=null;
	if ( !isset( $conversationToM ) ) $conversationToM = WModel::get( 'vendor.conversationto' );
	$conversationToM->setVal( 'uid', 0 );
	$conversationToM->whereE( 'mcid', $mcid );
	$conversationToM->update();
	$this->_deleteMessage( 'vendor.conversationstatus', $mcid );
	return true;
}
private function _unremoveChildFound($mcid) {
	static $conversationM=null;
	if ( !isset($conversationM) ) $conversationM = WModel::get( 'vendor.conversation' );
	$conversationM->makeLJ( 'vendor.conversationto', 'mcid', 'mcid', 0, 1 );
	$conversationM->select( 'mcid', 0, null, 'count' );
	$conversationM->where( 'uid', '>', 0, 1 );
	$conversationM->whereE( 'parent', $mcid, 0 );
	$result = $conversationM->load( 'lr' );
	$returnValue = ( !empty($result) && ( $result > 0 ) ) ? true : false;
	return $returnValue;
}
private function _unremoveParentFound($mcid) {
	static $conversationM=null;
	if ( !isset($conversationM) ) $conversationM = WModel::get( 'vendor.conversation' );
	$conversationM->whereE( 'mcid', $mcid );
	$getParentmcid = $conversationM->load( 'lr', 'parent' );
	static $conversationToM=null;
	if ( !isset( $conversationToM ) ) $conversationToM = WModel::get( 'vendor.conversationto' );
	$conversationToM->whereE( 'mcid', $mcid );
	$result = $conversationToM->load( 'lr', 'uid' );
	$returnValue = ( !empty($result) && ( $result > 0 ) ) ? true : false;
	return $returnValue;
}}