<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Node_install extends WInstall {
	public function install(&$object) {
				if ( !empty( $this->newInstall ) || (property_exists($object, 'newInstall') && $object->newInstall) ) {
									WText::load( 'catalog.node' );
			$installWidgetsC = WClass::get( 'install.widgets' );
			$installWidgetsC->installWidgetType(
				'catalog.banner'
				, "Catalog banner widget"
				, WText::t('1449596969PSRO')
				, WText::t('1449669410CIGO')
				, 27				);
			$installWidgetsC->installWidgetType(
				'catalog.search'
				, "Catalog search widget"
				, WText::t('1373216618BXTU')
				, WText::t('1449669410CIGP')
				, 27				);
		}		
	}	
	public function addExtensions() {
				$extension = new stdClass;
		$extension->namekey = 'catalog.search.module';
		$extension->name = "Joobi - Catalog Search module";
		$extension->folder = 'catalog';
		$extension->type = 25;
		$extension->publish = 1;
		$extension->certify = 1;
		$extension->destination = 'node|catalog|module';
		$extension->core = 1;
		$extension->params = "publish=0\nwidgetView=catalog_search_module";
		$extension->description = '';
		$libraryCMSMenuC = WAddon::get( 'api.' . JOOBI_FRAMEWORK . '.cmsmenu' );
		$extension->install = $libraryCMSMenuC->modulePreferences();
		if ( $this->insertNewExtension( $extension ) ) $this->installExtension( $extension->namekey );
				$extension = new stdClass;
		$extension->namekey = 'catalog.advancesearch.module';
		$extension->name = "Joobi - Catalog Advance Search module";
		$extension->folder = 'catalog';
		$extension->type = 25;
		$extension->publish = 1;
		$extension->certify = 1;
		$extension->destination = 'node|catalog|module';
		$extension->core = 1;
		$extension->params = "publish=0";			$extension->description = '';
		$libraryCMSMenuC = WAddon::get( 'api.' . JOOBI_FRAMEWORK . '.cmsmenu' );
		$extension->install = $libraryCMSMenuC->modulePreferences();
		if ( $this->insertNewExtension( $extension ) ) $this->installExtension( $extension->namekey );
	}
	public function addWidgets() {
		$itemWidgetsC = WClass::get( 'item.widgets' );
		return $itemWidgetsC->installWidgets();
	}	
}