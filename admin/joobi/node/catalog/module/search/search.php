<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_CoreSearch_module extends WModule {
	function create() {
				$controller = new stdClass;
		$controller->controller = 'catalog';
		$controller->wid = $this->wid;
		$controller->sid = WModel::get( 'item', 'sid' );
		$controller->firstForm = true;
		$this->layout = WView::getHTML( 'catalog_item_search', $controller );			
		if ( !empty($this->layout) ) {
			$this->layout->initilizeElements();
			if ( isset($this->picklistvendor) ) WGlobals::set( 'showSearchFilterVendor', $this->picklistvendor, 'global' );
			else  WGlobals::set( 'showSearchFilterVendor', false, 'global' );
			if ( isset($this->picklistcategory) ) WGlobals::set( 'showSearchFilterCategory', $this->picklistcategory, 'global' );
			else  WGlobals::set( 'showSearchFilterCategory', false, 'global' );
			if ( isset($this->picklisttype) ) WGlobals::set( 'showSearchFilterType', $this->picklisttype, 'global' );
			else  WGlobals::set( 'showSearchFilterType', false, 'global' );
			if ( isset($this->picklistlocation) ) WGlobals::set( 'showSearchFilterLocation', $this->picklistlocation, 'global' );
			else  WGlobals::set( 'showSearchFilterLocation', false, 'global' );
						if ( isset($this->picklistzipcode) ) WGlobals::set( 'showSearchFilterZipCode', $this->picklistzipcode, 'global' );
			else  WGlobals::set( 'showSearchFilterZipCode', false, 'global' );
			if ( isset($this->picklistcountry) ) WGlobals::set( 'showSearchFilterCountry', $this->picklistcountry, 'global' );
			else  WGlobals::set( 'showSearchFilterCountry', false, 'global' );
			$formObj = WView::form( $this->layout->firstFormName );
			$formObj->hiddenRemove( 'task' );
			$size = ( !empty($this->size) ? $this->size : '100%' );
			WGlobals::set( 'catalogSearchInputSize', $size );
			$css = '';
			$css .= ' .sdmodule{float:none;}';
			if ( !empty($this->resultitemid) ) {
				$formObj = WView::form( $this->layout->firstFormName );
				$formObj->hidden( JOOBI_PAGEID_NAME, $this->resultitemid, true );
			}			
			$ctrl = WGlobals::get( 'controller' );
			$task = WGlobals::get( 'task' );
			if ( 'catalog' == $ctrl && 'category' == $task ) {
				$catid = WGlobals::getEID();
				$formObj = WView::form( $this->layout->firstFormName );
				$formObj->hidden( 'catid', $catid );
			}			
			WText::load( 'catalog.node' );
			$textSearch = WText::t('1206732365OQJI');
			$html = '<div class="search-div sdmodule">';
			$html .= $this->layout->make();
			$html .= '</div>';
			WPage::addCSSScript($css);
			$this->content = $html;
		}
	}
}