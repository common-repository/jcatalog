<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'form.select' );
class Catalog_CoreSearchlocation_form extends WForm_select {
	function create() {
		parent::create();
		$picklist = '<div class="searchLocationPicklist">' . $this->content . '</div>';
		$searchItem = WController::getFormValue( 'location' );
		if ( empty($searchItem) ) {
			$searchItem = WText::t('1375896154QSFL');
			$extraJS = ' onfocus="if (this.value==\''.$searchItem.'\') this.value=\'\';" onblur="if (this.value==\'\') this.value=\''.$searchItem.'\';"';
		} else {
			$extraJS = '';
		}
		$this->content = '<div class="searchLocationBox"><input id="wz_search_location"' . $extraJS. ' class="form-control inputbox" type="text" value="'.$searchItem.'" name="' . JOOBI_VAR_DATA . '[x][location]"></div>';
		$this->content .= '' . $picklist;
		return true;
	}
}