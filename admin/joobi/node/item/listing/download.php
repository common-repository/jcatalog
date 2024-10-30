<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreDownload_listing extends WListings_default{
	function create() {
		$path = ( $this->getValue( 'secure', 'files') ) ? JOOBI_URL_SAFE : JOOBI_URL_MEDIA;
		$path .= str_replace( '|', '/', $this->getValue( 'path', 'files') ) . '/';
		$link =  $path . $this->getValue( 'name', 'files') . '.' . $this->getValue( 'type', 'files');
		$this->content = '<a target="_blank" href="'.$link.'">'.WText::t('1206961905BHAV').'</a>';
		return true;
	}
}