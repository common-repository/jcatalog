<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Thumbnail_class extends WClasses {
	public function getThumbnailPath($pid) {
		$itemImagesM = WModel::get( 'item.images' );
		$itemImagesM->rememberQuery( true, 'Model_product_node' );
		$itemImagesM->whereE( 'pid', $pid );
		$itemImagesM->orderBy( 'premium', 'DESC' );
		$filid = $itemImagesM->load( 'lr', 'filid' );
		$fileHelperC = WClass::get( 'files.helper' );
		$url = JOOBI_URL_MEDIA . $fileHelperC->getURL( $filid, true );
		return $url;
	}
}