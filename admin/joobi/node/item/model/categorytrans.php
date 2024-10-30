<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Categorytrans_model extends WModel {
	function validate() {
		if ( !empty( $this->shorturl ) ) {
			$this->shorturl = WGlobals::filter( $this->shorturl, 'sef' );
		}
		return true;
	}
	function extra() {
		$mainSEFC = WClass::get( 'main.sefprocess' );
		if ( !empty( $this->shorturl ) ) {
			$shortURL = $mainSEFC->saveSEFEntry( $this->catid, $this->shorturl, 'catalog', 'category', $this->lgid );
		} else {			
			$sefProp = WPref::load( 'PCATALOG_NODE_CATEGORYSEF' );				if ( empty($sefProp) ) $sefProp = 'name';
			if ( 'name' == $sefProp ) {
				$URLString = $this->name;
			} else {
				$URLString = WModel::getElementData( 'item.category', $this->catid, $sefProp );
								if ( WPref::load( 'PLIBRARY_NODE_MULTILANGENG' ) ) {
					$URLString .= '_' . WLanguage::get( $this->lgid, 'code' );
				}				
			}			
			$shortURL = $mainSEFC->saveSEFEntry( $this->catid, WGlobals::filter( str_replace( ' ', '-', substr( $URLString, 0, 100 ) ), 'sef' ), 'catalog', 'category', $this->lgid );
		}		
		if ( !empty($shortURL) ) {
			$model = WModel::get( $this->getModelID() );
			$pk = $this->getPK();
			$model->whereE( $pk, $this->$pk );
			$model->setVal( 'shorturl', $shortURL );
			$model->update();
		}		
		return true;
	}	
}