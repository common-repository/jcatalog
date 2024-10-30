<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Item_itemcat_module_view extends Output_Forms_class {
function prepareView() {
		if ( 'carrousel' != $this->getValue( 'display' ) ) {
			$this->removeElements( 'item_itemcat_module_carrouselarrow' );
		}
		if ( ! WPref::load( 'PITEM_NODE_CATSUBCOUNT' ) ) $this->removeElements( 'item_itemcat_module_totalitemsub' );
		if ( ! $this->getValue( 'megamenu' ) ) $this->removeElements( array( 'item_itemcat_module_menuexpand', 'item_itemcat_module_nbcomuns', 'item_itemcat_module_menuheader' ) );
		else $this->removeElements( array( 'item_itemcat_module_bordershow', 'item_itemcat_module_bordercolor', 'item_itemcat_module_carrouselarrow', 'item_itemcat_module_layout',
		'item_itemcat_module_layoutname', 'item_itemcat_module_showdesc', 'item_itemcat_module_climit', 'item_itemcat_module_nbitems', 'item_itemcat_module_itemimage',
		'item_itemcat_module_imagewidth', 'item_itemcat_module_imageheight', 'item_itemcat_module_showcolumn', 'item_itemcat_module_subcatpopover', 'item_itemcat_module_showall' ) );
		return true;
	}}