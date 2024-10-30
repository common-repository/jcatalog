<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_results_search_controller extends WController {
function search() {
		$catalogStdSeearchC = WClass::get( 'catalog.stdsearch' );
		$lk = $catalogStdSeearchC->loadSearchfilters();
		if ( WGlobals::get( 'wajx' ) ) {
			$redirectLink = WPages::link( 'controller=catalog-results&task=home' . $lk, WPage::getPageId( 'catalog' ) );
			self::ajaxReturnObj( 'redirect', '', $redirectLink );
		} else {
			WPages::redirect( 'controller=catalog-results&task=home' . $lk );
		}		
	return true;
}
}