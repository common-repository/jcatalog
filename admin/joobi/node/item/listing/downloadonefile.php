<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreDownloadonefile_listing extends WListings_default {
function create() {
	$filid = $this->getValue( 'filid' );
	$myKey = WTools::randomString( 100, false );
	WGlobals::setSession( 'order', 'secretKey-' . $filid, md5( $myKey . JOOBI_SITE_TOKEN . $filid ) );
	$link = WPage::linkHome( 'controller=item&task=downloadall&eid='. $filid . '&secretkey=' . $myKey . URL_NO_FRAMEWORK );
	$this->content = '<a class="btn btn-success" target="_blank" href="'.$link.'">'.WText::t('1206961905BHAV').'</a>';
	return true;
}}