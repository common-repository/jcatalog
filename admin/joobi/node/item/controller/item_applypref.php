<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_applypref_controller extends WController {
function applypref() {
	parent::savepref();
	$itemPreferencesC = WClass::get( 'item.preferences' );
	$itemPreferencesC->onSavePref( $this->generalPreferences  );
	WPages::redirect( 'controller=item&task=preferences' );
	return true;
}}