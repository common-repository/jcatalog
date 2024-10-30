<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Item_item_widget_view extends Output_Forms_class {
function prepareView() {
	if ( 'carrousel' != $this->getValue( 'display' ) ) {
		$this->removeElements( 'item_item_module_carrouselarrow' );
	}
		if ( ! WPref::load( 'PPRODUCT_NODE_USEMANUFACTURER' ) ) {
			$this->removeElements( 'item_item_module_showmanufacturer' );
		}
	return true;
}
}