<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
if ( WLoadFile( 'main.class.type', JOOBI_DS_NODE ) ) {
	class Item_Type_class extends Main_Type_class {
		var $typeModelName = 'item.type';
		var $typeModelPK = 'prodtypid';
		var $itemModelName = 'item';
		var $itemModelPK = 'pid';
		var $designationNode = 'item';
		var $cacheFolder = 'TypeItem';
		var $designationMap = 'type';
		public function loadTypeBasedOnPID($pid,$return='data') {
						WGlobals::set( 'sharedItemType', 10, 'global' );
			return $this->loadTypeFromID( $pid, $return );
		}	
	}
}