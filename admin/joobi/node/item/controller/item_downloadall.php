<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_downloadall_controller extends WController {
function downloadall() {
	$filid = WGlobals::getEID();
	if ( empty($filid) ) return false;
	$myKeySession = WGlobals::getSession( 'order', 'secretKey-' . $filid, '' );
	$myKey = WGlobals::get( 'secretkey', '9' );
	if ( $myKeySession != md5( $myKey . JOOBI_SITE_TOKEN . $filid ) ) return false;
	$orderDownloadC = WClass::get( 'files.download' );
	$orderDownloadC->getFile( $filid, false );
	return true;
}
}