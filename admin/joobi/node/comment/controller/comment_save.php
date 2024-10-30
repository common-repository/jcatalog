<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_save_controller extends WController {
	private $commentType = null;
	private $etid = null;
function save() {
	if ( WRoles::isAdmin( 'manager' ) ) {
		return parent::save();
	}
	$this->sid = WGlobals::get('sid');
	$commentMID = WModel::getID('comment');					
	if ( empty($this->sid) ) $this->sid = $commentMID;
	$commentTransMID = WModel::getID('commenttrans');
	$trk = WGlobals::get( JOOBI_VAR_DATA );
	$trk[$commentMID]['score'] = ( !empty($trk[$commentMID]['score']) ) ? $trk[$commentMID]['score'] : WGlobals::get('extra');						
	$trk[$commentMID]['tkid'] = ( !empty($trk[$commentMID]['tkid']) ) ? $trk[$commentMID]['tkid'] : WGlobals::get('tkid');						
	$authoruid = 0;
	$username = '';
	if ( ! WUser::isRegistered() ) {
				$captchaToolsC = WClass::get( 'main.captcha' );
		if ( !$captchaToolsC->checkProcedure( WPref::load( 'PUSERS_NODE_USECAPTCHA' ) ) ) return false;
		$email = $trk[$commentMID]['x']['email'];				
		$name = ( empty($trk[$commentMID]['x']['name']) ) ? $trk[$commentMID]['x']['email']: $trk[$commentMID]['x']['name'];
		$usersCredentialC = WUser::credential();
		$authoruid = $usersCredentialC->ghostAccount( $email, $name, true, null, null, true );
		$trk[$commentMID]['authoruid'] = $authoruid;
	}
	$tkid = ( !empty($trk[$commentMID]['tkid']) ) ? $trk[$commentMID]['tkid']: 0;
	$this->commentType = $trk[$commentMID]['commenttype'];
	$this->etid = $trk[$commentMID]['etid'];
	WGlobals::setEID( (int)$trk[$commentMID]['tkid'] );
	WGlobals::set( JOOBI_VAR_DATA, $trk );
	parent::save();
	if ( empty($tkid) ) {
				$cmtRatingC = WClass::get('comment.rating');
		if ( empty($this->commentType) ) $this->commentType = WGlobals::get('commenttype');
		if ( empty($this->etid) ) $this->etid = WGlobals::get('etid');
		$obj = new stdClass;
		$obj->etid = $this->etid;
		$obj->commenttype = $this->commentType;
		$obj->score = ( !empty($trk[$commentMID]['score']) ) ? $trk[$commentMID]['score'] : WGlobals::get('extra');		$content = '';
		$cmtRatingC->updateRating( $obj );
	}
	$this->_wallComment();
	WPages::redirect( 'controller=catalog' );
	return true;
}
	private function _wallComment() {
		if ( empty($this->etid) || empty($this->commentType) ) return true;
		$itemWallC = WClass::get( 'item.wall' );
		if ( $itemWallC->available() ) {
			$extraLink = '';
			if ( WExtension::exist( 'affiliate.node') ) {
				$affiliateHelperC = WClass::get( 'affiliate.helper', null, 'class', false );
				$extraLink = $affiliateHelperC->addAffilateToLink();
			}
			switch ( $this->commentType ) {
				case 30:						$vendorHelperC = WClass::get( 'vendor.helper' );
					$vendorName = $vendorHelperC->getVendor( $this->etid, 'name' );
					$post = new stdClass;
					$post->callingFunction = 'wallvendorcomment';
					$pageID = WGlobals::getSession( 'pageLocation', 'lastPageItem', true );
					$link = WPage::routeURL('controller=vendors&task=home&eid='.$this->etid . $extraLink, 'home', 'default', false, $pageID );
					$ITEMNAME = '<a href="'. $link .'">'. $vendorName .'</a>';
					$post->title = str_replace(array('$ITEMNAME'), array($ITEMNAME),WText::t('1338493462CZZH'));
					$post->eid = $this->etid;
					$post->model = 'vendors';
					$post->context = $post->model;
					$post->node = 'comment.node';
					$post->link = $link;
					$post->titleTR = WText::translateNone('{tag:actor} posted {multiple}{count} comments{/multiple}{single}a comment{/single} about vendor ' . $ITEMNAME );
					$post->titleVAR = '$ITEMNAME';
					$itemWallC->postWall( $post );
					break;
				case 10:	
					$itemM = WModel::get( 'itemtrans' );
					$itemM->whereE( 'pid' , $this->etid );
					$itemM->whereLanguage( 0 );
					$productName = $itemM->load( 'lr', 'name' );
					$post = new stdClass;
					$post->callingFunction = 'wallitemcomment';	
					$pageID = WGlobals::getSession( 'pageLocation', 'lastPageItem', true );
					$link = WPage::routeURL('controller=catalog&task=show&eid='.$this->etid . $extraLink, 'home', 'default', false, $pageID );
					$ITEM_NAME = '<a href="'. $link .'">'. $productName .'</a>';
					$post->title = str_replace(array('$ITEM_NAME'), array($ITEM_NAME),WText::t('1338493462CZZI'));
					$post->eid = $this->etid;
					$post->model = 'item';
					$post->node = 'comment.node';
					$post->context = $post->model;
					$post->link = $link;
					$post->titleTR = WText::translateNone('{tag:actor} posted {multiple}{count} comments{/multiple}{single}a comment{/single} about item ' . $ITEM_NAME .'.' );
					$post->titleVAR = '$ITEM_NAME';
					$itemWallC->postWall( $post );
					break;
				default:
					break;
			}
		}
	}}