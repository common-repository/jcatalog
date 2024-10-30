<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Removepids_filter {
function create() {
	$removeCurrentA = WGlobals::get( 'removeCurrentA', array() );
	return $removeCurrentA;
}}