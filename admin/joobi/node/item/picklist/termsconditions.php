<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Termsconditions_picklist extends WPicklist {
	function create() {
		$itemTermsC = WClass::get( 'item.termsconditions' );
		$termsInfoO = $itemTermsC->createListofTerms();
		if ( empty($termsInfoO) ) return false;
		foreach( $termsInfoO as $one ) {
			$link = WPage::linkPopUp( 'controller=catalog&task=terms&eid='. $one->termid . '&titleheader=' . $one->name );
			$html = ' ' . WPage::createPopUpLink( $link, $one->name, 900, 550 );
			$this->addElement( $one->termid, $html );
		}
		return true;	
	}}