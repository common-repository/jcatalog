<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Siteintegrartion_picklist extends WPicklist {
function create() {
	$isteURL  = WPref::load( 'PTICKET_NODE_SITEINTEGRATION' );
	$licenseExist = WExtension::exist( 'license.node' );
	if ( !$isteURL || !$licenseExist ) return false;
	$uid = WUser::get( 'uid' );
	$licenseSitesM = WModel::get( 'license.sites' );
	$licenseSitesM->makeLJ( 'license', 'lcid' );
	$licenseSitesM->makeLJ( 'site', 'stid', 'stid', 0, 2 );
	$licenseSitesM->whereE( 'premium', 1 );
	$licenseSitesM->whereE( 'publish', 1 );
	$licenseSitesM->whereE( 'uid', $uid, 1 );
	$licenseSitesM->select( array( 'stid', 'url' ), 2 );
	$allSitesA = $licenseSitesM->load( 'ol' );
	if ( empty($allSitesA) ) {
		return false;
	} else {
		$this->addElement( 0, ' - ' . WText::t('1450126764GDUH') . ' - ' );
		foreach( $allSitesA as $oneSite ) {
			$this->addElement( $oneSite->stid, $oneSite->url );
		}
	}
	return true;
}
}