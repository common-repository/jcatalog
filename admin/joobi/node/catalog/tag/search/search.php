<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Catalog_Search_tag {	 	
 	var $smartUpdate = false;
 	var $nodeName = 'catalog';
	public function process($givenTagsA) {
		static $onlyOnce = true;
		$replacedTagsA = array();
		foreach( $givenTagsA as $tag => $myTagO ) {
			WGlobals::set( 'catalogAjaxSearch', $myTagO, 'global' );
			WGlobals::setSession( 'catalogSearchWidget', 'searchzipcode', ( !empty($myTagO->picklistzipcode) ? $myTagO->picklistzipcode : 0 ) );
			WGlobals::setSession( 'catalogSearchWidget', 'searchcountry', ( !empty($myTagO->picklistcountry) ? $myTagO->picklistcountry : 0 ) );
			$html = '';
						$controller = new stdClass;
			$controller->controller = 'catalog';
			$controller->wid = WExtension::get( 'catalog.node' );
			$controller->sid = WModel::get( 'item', 'sid' );
			$controller->firstForm = true;
			$layoutH = WView::getHTML( 'catalog_item_search', $controller );	
			if ( !empty($layoutH) ) {
				if ( isset($myTagO->picklistvendor) ) WGlobals::set( 'showSearchFilterVendor', $myTagO->picklistvendor, 'global' );
				else WGlobals::set( 'showSearchFilterVendor', false, 'global' );
				if ( isset($myTagO->picklistcategory) ) WGlobals::set( 'showSearchFilterCategory', $myTagO->picklistcategory, 'global' );
				else WGlobals::set( 'showSearchFilterCategory', false, 'global' );
				if ( isset($myTagO->picklisttype) ) WGlobals::set( 'showSearchFilterType', $myTagO->picklisttype, 'global' );
				else WGlobals::set( 'showSearchFilterType', false, 'global' );
				if ( isset($myTagO->picklistlocation) ) WGlobals::set( 'showSearchFilterLocation', $myTagO->picklistlocation, 'global' );
				else WGlobals::set( 'showSearchFilterLocation', false, 'global' );
								if ( isset($myTagO->picklistzipcode) ) WGlobals::set( 'showSearchFilterZipCode', $myTagO->picklistzipcode, 'global' );
				else WGlobals::set( 'showSearchFilterZipCode', false, 'global' );
				if ( isset($myTagO->picklistcountry) ) WGlobals::set( 'showSearchFilterCountry', $myTagO->picklistcountry, 'global' );
				else WGlobals::set( 'showSearchFilterCountry', false, 'global' );
				$formObj = WView::form( $layoutH->firstFormName );
				$formObj->hiddenRemove( 'task' );
				$size = ( !empty($myTagO->size) ? $myTagO->size : '100%' );
				WGlobals::set( 'catalogSearchInputSize', $size );
				if ( !empty($myTagO->resultitemid) ) {
					$formObj = WView::form( $layoutH->firstFormName );
					$formObj->hidden( JOOBI_PAGEID_NAME, $myTagO->resultitemid );
				}			
				WText::load( 'catalog.node' );
				$textSearch = WText::t('1206732365OQJI');
				$html = '<div class="search-div sdmodule">';
				$html .= $layoutH->make();
								if ( isset($myTagO->advsearchdelete) ) {
					$html .= $this->_showAdvanceSearchFitlers();
				}				
				$html .= '</div>';
				WPage::addCSSScript( ' .sdmodule{float:none;}' );
			}			
			$myTagO->wdgtContent = $html;
			$replacedTagsA[$tag] = $myTagO;
		}		
		return $replacedTagsA;
	}
	private function _showAdvanceSearchFitlers() {
		$catalogAdvFilterC = WClass::get( 'catalog.advfilter' );
		$this->_advSeachableA = $catalogAdvFilterC->getItemFitlers();
		if ( empty( $this->_advSeachableA ) ) return '';
		$html = '';
		foreach( $this->_advSeachableA as $oneSearch ) {
			$lidToUse = $oneSearch->lid;
			$value = WGlobals::getUserState( 'advCtlg_val_' . $lidToUse, $lidToUse, null, '', 'advCatalog' );
			if ( !empty($value) ) {
				$link = WPages::link( 'controller=catalog&advCatalogReset[' . $oneSearch->lid . ']=1&advCatalog[' . $oneSearch->lid . ']=' );
				$linkText = $oneSearch->name . '<i class="fa fa-times-circle"></i>';
				$linkHTML = '<a href="' . $link . '">' . $linkText . '</a>';
				$html .= '<span class="badge resetFilter">' . $linkHTML . '</span>';
				$value = null;
			}		}	
		if ( !empty($html) ) $html = '<div class="advFilter">' . $html . '</div>';
		return $html;
	}	
}