<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Item_Itemmap_tag {	 	
 	var $smartUpdate = false;
 	var $nodeName = 'item';
 	private $_showPrice = false;
 	private $_showImage = false;
 	private $_showVendor = false;
	public function process($givenTagsA) {
		$replacedTagsA = array();
				if ( 'mobile' == JOOBI_FRAMEWORK_TYPE ) return $replacedTagsA;
		foreach( $givenTagsA as $tag => $myTagO ) {
			$showAllMap = ( !empty($myTagO->allitems) ? $myTagO->allitems : 0 );
			$mapMax = ( !empty($myTagO->nb) ? $myTagO->nb : 1000 );
			if ( empty($mapMax) || $mapMax < 10 ) $mapMax = 1000;
			$mapWidth = ( !empty($myTagO->width) ? $myTagO->width : 0 );
			$mapHeight = ( !empty($myTagO->height) ? $myTagO->height : 0 );
						if ( !empty( $myTagO->showprice ) ) $this->_showPrice = true;
			if ( !empty( $myTagO->showimage ) ) $this->_showImage = true;
			if ( !empty( $myTagO->showvendor ) ) $this->_showVendor = true;
			$myTagO->wdgtContent = $this->_createMap( $mapMax, $mapWidth, $mapHeight, $showAllMap );
			$replacedTagsA[$tag] = $myTagO;
		}
		return $replacedTagsA;
	}
 	private function _createMap($mapMax,$mapWidth,$mapHeight,$showAllMap) {
		if ( empty($showAllMap) ) {
			$coordinatesA =	WGlobals::get( 'itemsCoordinatesA', array(), 'global' );
			if ( empty($coordinatesA) ) {
				$message = WMessage::get();
				$message->adminE( "To display the items' map there need to be a widget with Items and those items need coordinates!" );
			}		} else {
			$itemM = WModel::get( 'item' );
			$itemM->makeLJ( 'itemtrans', 'pid' );
			$itemM->makeLJ( 'item.type', 'prodtypid', 'prodtypid', 0, 2 );
			$itemM->select( 'type', 2 );
			$itemM->whereLanguage();
			$itemM->setLimit( $mapMax );
			$itemM->select( 'name', 1 );
			$itemM->checkAccess();
			$itemM->whereE( 'publish', 1 );
			$itemM->where( 'longitude', '<', '180' );
			$itemM->where( 'longitude', '>', '-180' );
			$itemM->where( 'latitude', '<', '180' );
			$itemM->where( 'latitude', '>', '-180' );
			$coordinatesA = $itemM->load( 'ol', array( 'location', 'longitude', 'latitude', 'pid', 'vendid', 'price', 'priceid', 'curid' ) );
		}		
		if ( empty( $coordinatesA ) ) return '';
				$productDesignationT = WType::get( 'item.designation' );
		foreach( $coordinatesA as $one ) {
						$itemTypeName = $productDesignationT->getName( $one->type );
			$one->icon = JOOBI_URL_MEDIA . 'itemtype/thumbnails/' . $itemTypeName . 'typex.png';
			$pageLink = ( !empty($one->pageLink) ? $one->pageLink : WPage::linkHome( 'controller=catalog&task=show&eid=' . $one->pid, WPage::getPageId( 'catalog' ) ) );
			$one->name = '<a href="' . $pageLink . '">' . $one->name . '</a>';
			if ( $this->_showImage ) {
				if ( empty($one->thumbnailPath) ) {
					if ( !isset($itemThumbnailC) ) $itemThumbnailC = WClass::get( 'item.thumbnail' );
					$one->thumbnailPath = $itemThumbnailC->getThumbnailPath( $one->pid );
				}				
				$one->name .= '<br>' . '<img src="' . $one->thumbnailPath . '" height=50>';
			}			
			if ( $this->_showPrice && !empty($one->price) ) {
				$priceType = WModel::getElementData( 'product.price', $one->priceid, 'type' );
				$priceObj = new stdClass;
				$priceObj->pid = $one->pid;
				$priceObj->priceType = $priceType;
				$priceObj->price = $one->price;
				$priceObj->curidFrom = $one->curid;
				$priceObj->curidTo = WUser::get( 'curid' );
								if ( empty( $prodPricesC ) ) $prodPricesC = WClass::get( 'product.prices', null, 'class', false );
				$one->price = $prodPricesC->showPriceHTML( $priceObj );
				$one->name .= '<br>' . WText::t('1206961911NYAN')  . ': ' . $one->price;
			}			
						if ( $this->_showVendor ) {
				$vendorName = WModel::getElementData( 'vendor', $one->vendid, 'name' );
				$one->name .= '<br>' . WText::t('1221228435BYUA')  . ': ' . '<a href="' . WPage::linkHome( 'controller=vendors&task=home&eid=' . $one->vendid, WPage::getPageId( 'catalog' ) ) . '">' . $vendorName . '</a>';
			}					
		}
				$showMapWidth = $mapWidth;
		if ( empty( $showMapWidth ) || $showMapWidth < 50 ) $showMapWidth = 600;
		$showMapHeight = $mapHeight;
		if ( empty( $showMapHeight ) || $showMapHeight < 50 ) $showMapHeight = 350;
		$addressMapC = WClass::get( 'address.map', null, 'class', false );
		if ( empty($addressMapC) ) return '';
		$addressMapC->setClustering( $coordinatesA );
		$addressMapC->setWidth( $showMapWidth );
		$addressMapC->setHeight( $showMapHeight );
		return $addressMapC->renderMapOnly();
 	}
}