<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Onefilter_form extends WForms_default {
	function create() {
		$allFieldsA = array();
		WLoadFile( 'output.doc.document', JOOBI_DS_NODE );
		$elementO = new stdClass;
		$elementO->source = ( !empty( $this->element->item->initial ) ? $this->element->item->initial : 'standard' );
		$oneFilter = $this->element;
		$map = $this->element->newMap;
		$oneListingO = $this->_createFilterElement( $map, $elementO );	
		$columnInstance = Output_Doc_Document::loadListingElement( $oneListingO );
		if ( empty($columnInstance) ) return false;
		$task = WGlobals::get( 'task' );
		if ( 'category' != $task ) $task = '';
		$memory = 'advCatalog';
		$status = $columnInstance->advanceSearchLinks( $memory, 'advCtlg_val_', 'catalog', $task );
		if ( empty($status) ) return false;
		if ( !empty($oneFilter->combined) ) return false;
		$this->content = $columnInstance->content;
		if ( empty($this->content) ) return false;
		return true;
	}
	private function _createFilterElement($oneField,$element) {
		$catalogAdvsearchC = WClass::get( 'catalog.advsearch' );
		return $catalogAdvsearchC->createFilterElement( $oneField, $element, Catalog_Catalog_filter_form_view::$customFieldInfoA, Catalog_Catalog_filter_form_view::$vendorsFieldInfoA );
	}
}