<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Syndicate_class extends WClasses {
	public function syndicateToItem($pid,$vendid,$catid) {
		if ( empty($pid) || empty($vendid) ) return false;
		if ( empty($catid) ) {
						$vendorsHelperC = WClass::get( 'vendors.helper' );
			$catid = $vendorsHelperC->getVendorCategoryID( $uid );
		}
				if ( !empty($catid) ) {
			$itemCAtegoryItemM = WModel::get( 'item.categoryitem' );
			$itemCAtegoryItemM->setVal( 'pid', $pid );
			$itemCAtegoryItemM->setVal( 'catid', $catid );
			$status = $itemCAtegoryItemM->insertIgnore();
		}
				$ownerVendid = WModel::getElementData( 'item', $pid, 'vendid' );
				$allowResellers = WPref::load( 'PCATALOG_NODE_ALLOWRESELLERS' );
		$prodtypid = WModel::getElementData( 'item', $pid, 'prodtypid' );
		$itemTypeC = WClass::get( 'item.type' );
		$designation = $itemTypeC->loadTypeData( $prodtypid, 'type' );
		$approvedValue = 1;
		if ( $designation < 10 ) {
									$approve = WPref::load( 'PCATALOG_NODE_RESELLERAPPROVAL' );
			if ( $approve ) {
								$itemSyndicateM = WModel::get( 'item.syndication' );
				$itemSyndicateM->whereE( 'vendid', $vendid );
				$itemSyndicateM->whereE( 'ownervendid', $ownerVendid );
				$approvedValue = $itemSyndicateM->load( 'lr', 'approved' );
				if ( empty($approvedValue) ) {
										$myParams = new stdClass;
					$myParams->approvalLink = WPages::linkHome( 'controller=vendors-reseller', WPages::getPageId( 'vendors' ) );
					$myParams->itemLink = WPages::linkHome( 'controller=catalog&task=show&eid=' . $pid . '&catid=' . $catid, WPages::getPageId( 'vendors' ) );
					$myParams->productName = WModel::getElementData( 'product', $pid, 'name' );
					$myParams->resellerName = WModel::getElementData( 'vendors', $vendid, 'name' );
					$myParams->vendorName = WModel::getElementData( 'vendors', $ownerVendid, 'name' );
										WMessage::log( $myParams, 'email-params' );					
					$uid = WModel::getElementData( 'vendors', $ownerVendid, 'uid' );
					$mailingM = WMail::get();
					$mailingM->setParameters( $myParams );
					$mailingM->sendNow( $uid, 'vendors_syndicate_approve' );
				}					
			}					
		}		
		$itemSyndicateM = WModel::get( 'item.syndication' );
		$itemSyndicateM->setVal( 'pid', $pid );
		$itemSyndicateM->setVal( 'catid', $catid );
		$itemSyndicateM->setVal( 'vendid', $vendid );
		$itemSyndicateM->setVal( 'ownervendid', $ownerVendid );
		$itemSyndicateM->setVal( 'modifiedby', WUser::get( 'uid' ) );
		$itemSyndicateM->setVal( 'modified', time() );
		$itemSyndicateM->setVal( 'approved', $approvedValue );
		$itemSyndicateM->insertIgnore();
		$this->userS('1314356542OZIA');
	}
}