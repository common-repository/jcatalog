<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_download_controller extends WController {
	function download() {
		$pid = WGlobals::getEID();
		if ( empty($pid) ) return false;
		$catalogDownloadC = WClass::get( 'catalog.download' );
		$catalogDownloadC->downloadFile( $pid );
		return true;
	}
}