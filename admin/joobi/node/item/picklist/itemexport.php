<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Itemexport_picklist extends WPicklist {
	function create() {
				$columnsA = array();
		$columnsA['name'] = 'Name';
		if ( WPref::load( 'PVENDORS_NODE_SAME_SKU' ) ) {
			$columnsA['sku'] = 'SKU';
			$columnsA['namekey'] = 'Unique ID';
		} else  $columnsA['namekey'] = 'SKU';
		$columnsA['introduction'] = WText::t('1215603987EKZQ');
		$columnsA['description'] = WText::t('1206732392OZVG');
		$columnsA['alias'] = WText::t('1211811583DBTA');
		$columnsA['price'] = WText::t('1206961911NYAN');
		$columnsA['currency'] = WText::t('1206961948HYTE');
		$columnsA['itemType'] = WText::t('1304253944ERYB');
		$columnsA['priceType'] = WText::t('1400007137KLSS');
		$columnsA['discountrate'] = WText::t('1320220752GTWD');
		$columnsA['discountvalue'] = WText::t('1240389045GKAW');
		$columnsA['discountexpire'] = WText::t('1438500706BLJC');
		$columnsA['category'] = WText::t('1206732411EGQO');
		$columnsA['publish'] = WText::t('1206732372QTKN');
		$columnsA['featured'] = WText::t('1256629159GBCH');
		$columnsA['created'] = WText::t('1242282449PIOV');
		$columnsA['modified'] = WText::t('1356698583QHNA');
		$columnsA['publishstart'] = WText::t('1242282417SQOK');
		$columnsA['publishend'] = WText::t('1400007137KLST');
		$columnsA['availablestart'] = WText::t('1400007137KLSU');
		$columnsA['availableend'] = WText::t('1400007137KLSV');
		$columnsA['imageFile'] = WText::t('1338338319GRMZ');
		$columnsA['previewFile'] = WText::t('1400007137KLSW');
		$columnsA['itemFile'] = WText::t('1400007137KLSX');
		$columnsA['weight'] = WText::t('1206961996STAR');
		$columnsA['stock'] = WText::t('1206961996STAE');
		$designModelfieldsC = WClass::get( 'design.modelfields' );
		$SearchableFieldsA = $designModelfieldsC->getAllFields( 'item' );
		if ( !empty($SearchableFieldsA) ) {
			foreach( $SearchableFieldsA as $col => $name ) {
				$columnsA[$name] = $name;
			}		}		
		foreach( $columnsA as $col => $name ) $this->addElement( $col, $name );
		return true;
	}
}