<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_query_controller extends WController {
	function query() {
		$catalogNormalSearchC = WClass::get( 'catalog.normalsearch' );
		$catalogNormalSearchC->query();
		return true;
	}
}