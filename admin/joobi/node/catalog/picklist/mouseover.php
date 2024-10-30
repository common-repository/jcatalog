<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Mouseover_picklist extends WPicklist {
	function create() {
		$mypicklist = array();
		$mypicklist['name'] = WText::t('1351876536QFDB');
		$mypicklist['secondimage'] = WText::t('1441670309CUKQ');
		$mypicklist['imagezoomeffect'] = WText::t('1441298024GHNF');
		$mypicklist['social'] = WText::t('1351633860HQEN');
		$mypicklist['preview'] = WText::t('1211811587EZNL');
		$mypicklist['price'] = WText::t('1206961911NYAN');
		$mypicklist['rating'] = WText::t('1246243851IGLH');
		$mypicklist['introduction'] = WText::t('1215603987EKZQ');
		$mypicklist['description'] = WText::t('1206732392OZVG');
		$mypicklist['readmore'] = WText::t('1242282416HAPT');
			$mypicklist['askquestion'] = WText::t('1304526870NAKE');
		$mypicklist['addcart'] = WText::t('1263480669ALUN');
		foreach( $mypicklist as $key => $value ) {
			$this->addElement( $key, $value );
		}
		return true;
	}
}