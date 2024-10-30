<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Download_class extends WClasses {
	public function downloadFile($pid) {
				$logFirst = ( WPref::load( 'PCART_NODE_USENEWCART' ) ? WPref::load( 'PCART_NODE_LOGINBEFORECHECKOUT' ) : WPref::load( 'PBASKET_NODE_LOGINBEFORECHECKOUT' ) );
		if ( $logFirst ) {
						if ( ! WUser::isRegistered() ) {
								$usersCredentialC = WUser::credential();
				$usersCredentialC->goLogin();
			}		}
				if ( WExtension::exist( 'subscription.node' ) ) {
			$subscriptionCheckC = WObject::get( 'subscription.check' );
			$subscriptionCheckC->restriction( 'download_count', $pid );
			if ( !$subscriptionCheckC->getStatus() ) {
				$message = WMessage::get();
				$message->userW('1329161759BGNY');
				WPages::redirect( 'previous' );
			}
		}
				$itemC = WClass::get( 'item.access' );
		$downloadText = WText::t('1240388999GQSW');
		$hasAccess = $itemC->checkItemAccess( $pid, $downloadText );
		if ( ! $hasAccess ) return false;
		$itemDownloadsM = WModel::get( 'item.downloads'  );
		$itemDownloadsM->whereE('pid', $pid );
		$filidA = $itemDownloadsM->load( 'lra', 'filid' );
		if ( !empty($filidA) ) {
			$uid = WUser::get('uid');
			if ( WPref::load( 'PITEM_NODE_DOWNLOAD_RESTRICTION' ) ) {
								$itemO = WModel::getElementData( 'item' , $pid  );
				$maxDload = ( !empty($itemO->download_max) ? $itemO->download_max : WPref::load( 'PITEM_NODE_DOWNLOAD_MAX' ) );
				$periodDload = ( !empty($itemO->download_period) ? $itemO->download_period : WPref::load( 'PITEM_NODE_DOWNLOAD_PERIOD' ) );
				if ( $maxDload > 0 ) {
										$downloadM = WModel::get( 'item.downloadusers' );
					$downloadM->whereE( 'pid', $pid );
					$downloadM->whereE( 'uid', $uid );
					$total = $downloadM->total();
					if ( $total >= $maxDload ) {
						$this->userW('1476312216PFFT');
						return false;
					}					
				}				
				if ( $periodDload > 0 ) {
										$downloadM = WModel::get( 'item.downloadusers' );
					$downloadM->whereE( 'pid', $pid );
					$downloadM->whereE( 'uid', $uid );
					$downloadM->orderBy( 'created', 'ASC' );
					$creadted = $downloadM->load( 'lr', 'created' );
					$expiration = $creadted + $periodDload;
					if ( time() > $expiration ) {
						$this->userW('1476312216PFFU');
						return false;
					}				}				
			}			
						$itemM = WModel::get( 'item' );
			$itemM->whereE( 'pid', $pid );
			$itemM->updatePlus( 'nbsold', 1 );
			$itemM->update();
						$itemM->whereE( 'pid', $pid );
			$itemM->where( 'stock', '>', 0 );
			$itemM->updatePlus( 'stock', -1 );
			$itemM->update();
			$downloadM = WModel::get( 'item.downloadusers' );
			$downloadM->setVal( 'pid', $pid );
			$downloadM->setVal( 'uid', $uid );
			$downloadM->setVal( 'created', time() );
			$downloadM->insertIgnore();
			$nbDownloads = count( $filidA );
			if ( $nbDownloads > 1 ) {
				$myKey = WTools::randomString( 100, false );
				WGlobals::setSession( 'order', 'secretKey', md5( $myKey . JOOBI_SITE_TOKEN . $pid ) );
								$link = 'controller=item&task=downloads&eid='.$pid . '&secretkey=' . $myKey;
				if ( 'wordpress' == JOOBI_FRAMEWORK_TYPE ) $link .= '&bfrhead=0';
				WPages::redirect( $link );
			}
			$filid = $filidA[0];
			$fileDownloadC = WClass::get( 'files.download' );
			$fileDownloadC->getFile( $filid, false );
			WPages::redirect( 'previous' );
		}
		return true;
	}
}