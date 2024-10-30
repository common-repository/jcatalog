<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Sorting_type extends WTypes {
var $sorting = array(
	'featured' => 'Featured',
	'rated' => 'Highest Rated',
	'sold' => 'Bestselling',
	'hits' => 'Most Popular',
	'reviews' => 'Most Reviewed',
	'highprice' => 'Highest Price',
	'lowprice' => 'Lowest Price',
	'alphabetic' => 'Alphabetic',
	'reversealphabetic' => 'Reverse Alphabetic',
	'alphabeticsku' => 'Alphabetic SKU',
	'newest' => 'Latest',
	'oldest' => 'Oldest',
	'justsold' => 'Just Sold',
	'onsale' => 'On Sale',
	'recentlyviewed' => 'Recently Viewed',
	'mytopviewed' => 'My Top Viewed',
	'recentlyupdated' => 'Recently Updated',
	'endingsoon' => 'Ending Soon',
	'availabledate' => 'Available Date',
	'random' => 'Random',
	'ordering' => 'IDs Ordering'
);
	protected function translatedType() {
		$typeA = array();
		$typeA['newest'] = WText::t('1304918557EIYL');
		$typeA['oldest'] = WText::t('1307606755CNOQ');
		if ( WPref::load( 'PITEM_NODE_RECENTLYVIEWED' ) ) {
			$typeA['recentlyviewed'] = WText::t('1420549772RZVB');
			$typeA['mytopviewed'] = WText::t('1420549772RZVC');
		}		$typeA['recentlyupdated'] = WText::t('1307606756SRYQ');
		$typeA['featured'] = WText::t('1256629159GBCH');
		$typeA['sold'] = WText::t('1304527165QGOS');
		$typeA['rated'] = WText::t('1257243215EFTI');
		$typeA['hits'] = WText::t('1242282415NZTN');
		$typeA['reviews'] = WText::t('1257243215EFTU');
		$typeA['highprice'] = WText::t('1305198010FCNE');
		$typeA['lowprice'] = WText::t('1305198010FCNF');
		$typeA['alphabetic'] = WText::t('1219769904NDIK');
		$typeA['alphabeticsku'] = WText::t('1472137617EDIU');
		$typeA['reversealphabetic'] = WText::t('1307606756SRYP');
		$typeA['justsold'] = WText::t('1308888986AJEG');
		$typeA['onsale'] = WText::t('1320230249NPSI');
		$typeA['endingsoon'] = WText::t('1412376020TDFY');
		$typeA['availabledate'] = WText::t('1415146133GKRN');
		$typeA['random'] = WText::t('1241592274CBNQ');
		$typeA['ordering'] = WText::t('1397153427HBIQ');
		if ( WPref::load( 'PDESIGN_NODE_FIELDSORTING' ) ) {
						$dbtid = WModel::get( 'item', 'dbtid' );
			$designModelfieldsM = WModel::get( 'design.modelfields' );
						$designModelfieldsM->rememberQuery( true, 'Model_model_fields' );
			$designModelfieldsM->makeLJ( 'library.model', 'sid' );
			$designModelfieldsM->whereE( 'sorting', 1 );
			$designModelfieldsM->whereE( 'dbtid', $dbtid, 1 );
			$designModelfieldsM->select( array( 'namekey', 'params', 'fdid', 'column' ) );
			$sortingA = $designModelfieldsM->load( 'ol' );
			if ( !empty($sortingA) ) {
				foreach( $sortingA as $sort ) {
					WTools::getParams( $sort );
					$typeA['asc|' . $sort->namekey . '|' . $sort->fdid] = $sort->sortingasc;
					$typeA['desc|' . $sort->namekey . '|' . $sort->fdid] = $sort->sortingdesc;
				}			}		}		
		return $typeA;
	}
}