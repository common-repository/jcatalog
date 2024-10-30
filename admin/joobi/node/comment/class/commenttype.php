<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_Commenttype_class extends WClasses {
function commentType($commenttype) {
	if (!empty($commenttype)) {
		switch ($commenttype) {
			case 10 :
				$comName='product';		
				break;
			case 30 :
				$comName='vendors-profile';
				break;
			case 20 :
			default:
				$comName='content';		
				break;
		}
	}
	return $comName;
}
function comValue($option) {
	$comVal = WGlobals::get( 'sharedItemType', 0, 'global' );
	if ( !empty($comVal) ) return $comVal;
	if (!empty($option)) {
		switch ($option) {
			case 'vendors-profile' :	
				$comVal=30;
				break;
			case 'jtickets' :
			case 'content' :		
				$comVal=20;
				break;
			case 'jstore' :					case 'jmarket':
			default:
				$comVal=10;
				break;
		}
	} else {
		$comVal = 20;
	}
	return $comVal;
}
}