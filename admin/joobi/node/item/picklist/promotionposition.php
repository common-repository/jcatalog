<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Promotionposition_picklist extends WPicklist {
	function create() {
		if ( WPref::load( 'PCATALOG_NODE_NEWFLEX' ) ) {
			if ( $this->onlyOneValue() ) {
				$mainWIdgetsM = WModel::get( 'main.widget' );
				$mainWIdgetsM->rememberQuery( true, 'Widgets' );
								$mainWIdgetsM->makeLJ( 'main.widgettrans', 'widgetid' );
				$mainWIdgetsM->whereLanguage();
				$mainWIdgetsM->makeLJ( 'main.widgettype', 'wgtypeid', 'wgtypeid', 0, 2 );
				$mainWIdgetsM->select( 'name', 1 );
				$widgetID = substr( $this->defaultValue, 5 );
				$mainWIdgetsM->whereE( 'widgetid', (int)$widgetID );
				$allWidgetO = $mainWIdgetsM->load( 'o', array( 'widgetid', 'framework_type', 'framework_id' ) );
				if ( !empty($allWidgetO) ) {
					if ( 92 == $allWidgetO->framework_type ) {
												$this->addElement( 'wdgt_' . $allWidgetO->framework_id,  $allWidgetO->name );
					} else {
						$this->addElement( 'wdgt_' . $allWidgetO->widgetid,  $allWidgetO->name );
					}				}				
			} else {
				$this->addElement( 0,  ' - ' . WText::t('1404269826PSKU') . ' - ' );
								$possibleWidgetsA = array( 'catalog.search', 'item.item', 'product.product' );
				$mainWIdgetsM = WModel::get( 'main.widget' );
								$mainWIdgetsM->makeLJ( 'main.widgettrans', 'widgetid' );
				$mainWIdgetsM->whereLanguage();
				$mainWIdgetsM->makeLJ( 'main.widgettype', 'wgtypeid', 'wgtypeid', 0, 2 );
				$mainWIdgetsM->whereIn( 'namekey', $possibleWidgetsA, 2 );
				$mainWIdgetsM->whereE( 'publish', 1 );
				$mainWIdgetsM->select( 'name', 1 );
				$allWidgetsA = $mainWIdgetsM->load( 'ol', array( 'widgetid', 'framework_type', 'framework_id' ) );
				if ( !empty($allWidgetsA) ) {
					foreach( $allWidgetsA as $oneWidget ) {
						if ( 92 == $oneWidget->framework_type ) {
														$this->addElement( 'wdgt_' . $oneWidget->framework_id,  $oneWidget->name );
						} else {
							$this->addElement( 'wdgt_' . $oneWidget->widgetid,  $oneWidget->name );
						}					}						
				}			}			
		} else {
						if ( $this->onlyOneValue() ) {
				switch ( $this->defaultValue ) {
					case 'siteCarrousel':							$this->addElement( 'siteCarrousel',  'Catalog Carrousel' );
						break;
					case 'siteItems':							$this->addElement( 'siteItems',  'Catalog Items' );
						break;
					case 'categoryCarrousel':							$this->addElement( 'categoryCarrousel',  'Category Carrousel' );
						break;
					case 'categoryItems':							$this->addElement( 'categoryItems',  'Category Items' );
						break;
					case 'search_item':							$this->addElement( 'search_item',  'Search Results' );
						break;
					case 'search_ajax_item':							$this->addElement( 'search_ajax_item',  'Ajax Search Results' );
						break;
					case 'vendorsCarrousel':							$this->addElement( 'vendorsCarrousel', 'Vendors Carrousel' );
						break;
					case 'vendorsItems':							$this->addElement( 'vendorsItems',  'Vendors Items' );
						break;
					default:
												$miscellaneousA = WAddon::get( 'api.' . JOOBI_FRAMEWORK . '.miscellaneous' );
						$existingWidgetsA = $miscellaneousA->getAllWidgetsIDforFeatured();
						if ( !empty( $existingWidgetsA ) ) {
							foreach( $existingWidgetsA as $oneWidget ) {
								if ( $this->defaultValue == $oneWidget->slug . $oneWidget->id ) {
									$this->addElement( $oneWidget->slug . $oneWidget->id,  $oneWidget->name );
									break;
								}							}						}						break;
				}			
			} else {
				$this->addElement( 0,  ' - ' . WText::t('1404269826PSKU') . ' - ' );
				$this->addElement( 'siteCarrousel',  'Catalog Carrousel' );
				$this->addElement( 'siteItems',  'Catalog Items' );
				$this->addElement( 'categoryCarrousel',  'Category Carrousel' );
				$this->addElement( 'categoryItems',  'Category Items' );
				$this->addElement( 'search_item',  'Search Results' );
				$this->addElement( 'search_ajax_item',  'Ajax Search Results' );
				if ( WExtension::exist( 'vendors.node' ) ) {
					$this->addElement( 'vendorsCarrousel',  'Vendors Carrousel' );
					$this->addElement( 'vendorsItems',  'Vendors Items' );
				}			
																$miscellaneousA = WAddon::get( 'api.' . JOOBI_FRAMEWORK . '.miscellaneous' );
				$existingWidgetsA = $miscellaneousA->getAllWidgetsIDforFeatured();
				if ( !empty( $existingWidgetsA ) ) {
					foreach( $existingWidgetsA as $oneWidget ) {
						$this->addElement( $oneWidget->slug . $oneWidget->id,  $oneWidget->name );
					}				}			
			}		}		
		return true;
	}
}