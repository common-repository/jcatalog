<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_Askquestion_picklist extends WPicklist {
function create() {
	$mypicklist = array();
	$mypicklist['internalmessage'] = WText::t('1307082967ACFT');
	$jtickets = WApplication::isEnabled( 'jtickets', true );
	if (!empty($jtickets)) $mypicklist['jtickets'] = 'jTickets';
	$usedOption = WPref::load( 'PUSERS_NODE_FRAMEWORK_FE' );
	if ( empty($usedOption) ) $usedOption = WApplication::getFrameworkName();	
	$jomSocial = WApplication::isEnabled( 'community', true );
	if ($usedOption == 'jomsocial' || $jomSocial ) {
		$mypicklist['jomsocialmessage'] = WText::t('1307002909NVUE');
	}
	$mypicklist['emailmessage'] = WText::t('1307082967ACFV');
	foreach( $mypicklist as $key => $value ) {
		$this->addElement( $key, $value );
	}
	return true;
}}