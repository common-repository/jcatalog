<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_results_home_controller extends WController {
	function home() {
		if ( WPref::load( 'PCATALOG_NODE_NEWFLEX' ) ) {
			$this->setView( 'catalog_search_results' );
			$catalogStdSeearchC = WClass::get( 'catalog.stdsearch' );
			$lk = $catalogStdSeearchC->loadSearchfilters();
		}
		return true;
	}
}