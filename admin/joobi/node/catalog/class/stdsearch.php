<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Stdsearch_class extends WClasses {
	public function loadSearchfilters() {
				$allParamsO = new stdClass;
				$search = WController::getFormValue( 'search' );
		if ( !empty( $search ) ) $allParamsO->search = $search;
		$prodtypid = WController::getFormValue( 'prodtypid' );
		if ( !empty( $prodtypid ) ) $allParamsO->prodtypid = $prodtypid;
		else $allParamsO->prodtypid = 0;
		$catid = WController::getFormValue( 'catid' );
		if ( !empty( $catid ) ) $allParamsO->category = $catid;
		else {
			$catid = WController::getFormValue( 'category' );
			if ( !empty( $catid ) ) $allParamsO->category = $catid;
		}		
		$vendid = WController::getFormValue('vendid');
		if ( !empty( $vendid ) ) {
			$allParamsO->vendor = $vendid;
			$allParamsO->vendid = $vendid;
		}
				$location = WController::getFormValue( 'location' );
		$locationDefaultText = WText::t('1375896154QSFL');
		if ( $location == $locationDefaultText ) $location = '';
						$country = WGlobals::getSession( 'catalogSearchWidget', 'searchzipcode', 0 );
				$zipcode = WController::getFormValue( 'zipcode' );
		$searchcountry = WGlobals::getSession( 'catalogSearchWidget', 'searchcountry', 0 );
		if ( $searchcountry ) $country = WController::getFormValue( 'country' );
		$countryName = '';
		$zipcodeDefaultText = WText::t('1398702488PGTJ');
		if( !empty($zipcode) && $zipcode != $zipcodeDefaultText ) {
			if ( !empty($location) ) $location .= ', ' . $zipcode;
		}		
		if ( !empty($country) ) {
			$location .= ', ';
			if ( is_numeric($country) ) {
				$countriesHelper = WClass::get( 'countries.helper' );
				$countryO = $countriesHelper->getData($country);
				$countryName = $countryO->name;
				$location .= $countryName;
			} else {
				$countryName = $country;
				$location .= $countryName;
			}		
		}		
		if ( !empty( $location ) ) {
			$radius = WController::getFormValue( 'radius' );
			if ( !empty($radius) ) {
				$allParamsO->location = $location;
				$allParamsO->radius = $radius;
			} else {
				$allParamsO->location = $location;
				$allParamsO->radius = 25;				}		}		
		WGlobals::set( 'catalogSearchParam', $allParamsO, 'global' );
		$eri = serialize( $allParamsO );
		$controller = WGlobals::get( 'controller', '', null, 'task' );
		WGlobals::set( $controller . 'extraID', md5($eri), 'global' );
		$lk = '';
		foreach( $allParamsO as $k => $v ) {
			$lk .= '&' . $k . '=' . $v;
		}		
		return $lk;
	}
}