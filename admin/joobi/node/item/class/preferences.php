<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Preferences_class extends WClasses {
	function onSavePref($preferencesA) {
				$allDisplay = array( 'itmnbdisplay', 'crslnbdisplay', 'ctynbdisplay', 'vdrnbdisplay', 'catcrslnbdisplay', 'catctynbdisplay', 'catitmnbdisplay', 'catvdrnbdisplay', 'bdlnbdisplay', 'prdnbdisplay', 'vdlytcrslnbdisplay', 'vdlytctynbdisplay', 'vdlytitmnbdisplay' );
		foreach( $allDisplay as $onediaplay ) {
			if ( isset( $preferencesA['catalog.node'][$onediaplay] ) ) {
				$usersAddon = WAddon::get( 'api.' . JOOBI_FRAMEWORK . '.user' );
				$usersAddon->clearSession( 'site' );
				break;
			}		}
		$extensionHelperC = WCache::get();
		$extensionHelperC->resetCache( 'View' );
		return true;
	}
}