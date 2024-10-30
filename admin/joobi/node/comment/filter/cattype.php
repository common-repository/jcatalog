<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_Cattype_filter {
function create() {
	$comVal = WGlobals::get( 'sharedItemType', 0, 'global' );
	if ( !empty($comVal) ) return $comVal;
	$controller = WGlobals::get('controller');
	$task = WGlobals::get( 'task' );
	$comOption = WApplication::getApp();
	if ( 'vendors' == $controller && 'home' == $task ) $comOption = 'vendors-profile';
	$comVal = null;
	$commentType = WClass::get('comment.commenttype');
	$value = $commentType->comValue($comOption);
	return $value;
}}