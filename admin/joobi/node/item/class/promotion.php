<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Promotion_class extends WClasses {
	public function insertAutomaticPromotion($pid) {
		if ( WExtension::exist( 'subscription.node' ) ) {
			$itemFeatureditemM = WModel::get( 'item.featureditem' );
			$itemFeatureditemM->whereE( 'pid', $pid );
			$itemFeatureditemM->delete();
			$subscriptionCheckC = WObject::get( 'subscription.check' );
			$subscriptionCheckC->restriction( 'vendors_promotion_automatic' );
			if ( $subscriptionCheckC->getStatus( false ) ) {
								$value = $subscriptionCheckC->getRestrictionValues();
				if ( empty($value) ) return false;
				$ftdidA = explode( '|_|', array_pop($value) );
				if ( empty($ftdidA) ) return false;
				$subA = $subscriptionCheckC->getUserSubscriptions();
				if ( empty($subA) ) return false;
				$subO = array_pop( $subA ); 
				$itemFeaturedM = WModel::get( 'item.featured' );
								$itemFeaturedM->whereIn( 'ftdid', $ftdidA );
				$featuredA = $itemFeaturedM->load( 'ol', array( 'ftdid', 'featured', 'duration', 'location', 'credits', 'ordering' ) );
				if ( empty($featuredA) ) return false;
				$order = 0;
				foreach( $featuredA as $featO ) {
					if ( $featO->ordering > $order ) $order = $featO->ordering;
					$itemFeatureditemM = WModel::get( 'item.featureditem' );
					$itemFeatureditemM->setVal( 'pid', $pid );
					$itemFeatureditemM->setVal( 'ftdid', $featO->ftdid );
					$itemFeatureditemM->setVal( 'status', 9 );
					$itemFeatureditemM->setVal( 'expiration', $subO->expiration );						$itemFeatureditemM->setVal( $featO->location, 1 );
					$itemFeatureditemM->replace();
				}					
				if ( $order > 0 ) {
					$order = 254 - $order;
					return $order;
				}				
				return true;
			}		
		}		
	}	
	public function insertNewPromotion($pid,$ftdidA) {
		if ( empty($ftdidA) || empty($pid) ) return true;
		if ( !is_array($ftdidA) ) $ftdidA = array( $ftdidA );
		$itemFeaturedM = WModel::get( 'item.featured' );
				$itemFeaturedM->whereIn( 'ftdid', $ftdidA );
		$featuredA = $itemFeaturedM->load( 'ol', array( 'ftdid', 'featured', 'duration', 'location', 'credits' ) );
		if ( empty($featuredA) ) return false;
		$paid = WPref::load( 'PITEM_NODE_PROMOTIONPAID' );
		$status = '';
		$itemFeatureditemM = WModel::get( 'item.featureditem' );
		$orderedFeaturedA = array();
		foreach( $featuredA as $oneFeature ) $orderedFeaturedA[$oneFeature->ftdid] = $oneFeature;
				foreach( $ftdidA as $ftdid ) {
			$itemFeatureditemM->setVal( 'pid', $pid );
			$itemFeatureditemM->setVal( 'ftdid', $ftdid );
			if ( $paid ) {
				if ( WExtension::exist( 'subscription.node' ) ) {
					$subscriptionCheckC = WObject::get( 'subscription.check' );
					$subscriptionCheckC->credit2Deduct( $orderedFeaturedA[$oneFeature->ftdid]->credits );
					$subscriptionCheckC->restriction( 'vendors_promotion', $pid );
					if ( ! $subscriptionCheckC->getStatus( false ) ) {
						$this->userW('1405139921HXZR');
						$link = WPage::link( 'controller=subscription' );
						$SUBSCRIBE_LINK = '<a href="'. $link . '">' . WText::t('1329161820RPTN') .'</a>';
						$this->userN('1405139921HXZS',array('$SUBSCRIBE_LINK'=>$SUBSCRIBE_LINK));
						$itemFeatureditemM->setVal( 'status', 9 );
						if ( $orderedFeaturedA[$oneFeature->ftdid]->duration < 86400 ) {
														$duration = $orderedFeaturedA[$oneFeature->ftdid]->duration * 86400;
						} else {
							$duration = $orderedFeaturedA[$oneFeature->ftdid]->duration;
						}						$itemFeatureditemM->setVal( 'expiration', time() + $duration );							$itemFeatureditemM->setVal( $orderedFeaturedA[$oneFeature->ftdid]->location, 1 );
						$itemFeatureditemM->replace();
						$subscriptionCheckC->redirectNow();
						continue;
					} else {
						$itemFeatureditemM->setVal( 'status', 9 );
					}
					if ( $orderedFeaturedA[$oneFeature->ftdid]->duration < 86400 ) {
												$duration = $orderedFeaturedA[$oneFeature->ftdid]->duration * 86400;
					} else {
						$duration = $orderedFeaturedA[$oneFeature->ftdid]->duration;
					}					$itemFeatureditemM->setVal( 'expiration', time() + $duration );	
				}
			}
			$itemFeatureditemM->setVal( $orderedFeaturedA[$oneFeature->ftdid]->location, 1 );
			$itemFeatureditemM->replace();
		}
		if ( !empty( $featuredA ) ) {
			$hasFeatured = false;
			foreach( $featuredA as $oneFeature ) {
				if ( !empty($oneFeature->featured) ) $hasFeatured = true;
			}
			if ( $hasFeatured ) {
				$itemM = WModel::get( 'item' );
				$itemM->whereE( 'pid', $pid );
				$itemM->setVal( 'featured', 1 );
				$itemM->update();
			}
		}
	}
}