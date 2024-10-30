<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_Vendorlink_picklist extends WPicklist {
	function create() {
				$mypicklist = array();
		$mypicklist[''] = WText::t('1336846878JRIF');
		$mypicklist['vendor'] = WText::t('1336846878JRIG');
				$usedOption = WPref::load( 'PUSERS_NODE_FRAMEWORK_FE' );
		if ( empty($usedOption) ) $usedOption = WApplication::getFrameworkName();
		$jomSocial = WApplication::isEnabled( 'community', true );
		if ($usedOption == 'jomsocial' || $jomSocial ) {
			$mypicklist['jomsocial'] = WText::t('1336846878JRIH');
		}
		foreach( $mypicklist as $key => $value ) {
			$this->addElement( $key, $value );
		}
		return true;
	}}