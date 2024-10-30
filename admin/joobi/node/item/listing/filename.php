<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreFilename_listing extends WListings_default{
function create() {
	$this->content = $this->getValue( 'name', 'files' );	
	$type =  $this->getValue( 'type', 'files');
	if ( $type != '' ) {
		$this->content .=  '.' . $type;
	}
return true;
}}