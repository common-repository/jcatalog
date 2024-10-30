<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_home_controller extends WController {
	function home() {
		$eid = WGlobals::getEID();
		if ( !empty( $eid ) ) WPages::redirect( 'controller=catalog&task=show&eid='. $eid, true );
		WGlobals::setSession( 'pageLocation', 'lastPageItem', WPage::getPageId() );
		WGlobals::setSession( 'pageLocation', 'lastPage', 'controller=catalog' );
		if ( WRoles::isAdmin() ) WPages::redirect( 'controller=catalog&task=listing' );
		WGlobals::setSession( 'categoryID', 'item.category', 0 );
				if ( WPref::load( 'PCATALOG_NODE_NEWFLEX' ) ) {
			$type = WGlobals::get( 'type' );
			if ( !empty($type) ) {
				if ( is_numeric( $type ) ) {
					$itemTypeC = WClass::get( 'item.type' );
					$type = $itemTypeC->loadTypeData( $type, 'designation' );
				}				
				$viewType = 'catalog_home_page_' . $type;
				$exist = WView::get( $viewType, 'yid', null, null, false );
								if ( ! $exist ) {
										$itemWidgetsC = WClass::get( 'item.widgets' );
					$allWidgetsA = $itemWidgetsC->installWidgets( $type, false );
					if ( !empty($allWidgetsA) ) {
						$installWidgetsC = WClass::get( 'install.widgets' );
												$viewNamekeyA = array();
						foreach( $allWidgetsA as $widget ) {
							if ( !empty($widget->view) ) $viewNamekeyA[$widget->view] = true;
						}						
						$installWidgetsC->addWidgetsToView( $allWidgetsA );
						WPages::redirect( 'previous' );
					}					
				}				
				if ( !empty($exist) ) {
					$this->setView( $viewType );
				} else {
					$this->setView( 'catalog_home_page' );
				}				
			} else {
				$this->setView( 'catalog_home_page' );
			}			
		}		
		return true;
	}	
	private function _installFormElement($oneWidget,$yid,$formElement) {
		$mainViewFormM = WModel::get( 'design.viewforms' );
		$parent = 0;
		$namekeyStart = $this->_loadViewInfo( $yid, 'namekey' )  . '_' . $oneWidget->namekey;
				$ordering = ( !empty($formElement->ordering) ? $formElement->ordering : 1 );
				if ( !empty($formElement->container) ) {
			$namekeyContainer = $namekeyStart . '_container';
			if ( ! ( $parent = $this->_checkFromAlreadyInstalled( $namekeyContainer ) ) ) {
				$mainViewFormM->setChild( 'design.viewformstrans', 'name', $oneWidget->name );
				if ( !empty($oneWidget->description) ) $mainViewFormM->setChild( 'main.viewformtrans', 'description', $oneWidget->description );
								$mainViewFormM->yid = $this->_loadViewInfo( $yid, 'yid' );
				$mainViewFormM->type = $formElement->container;
				if ( !empty($formElement->position) )$mainViewFormM->area = $formElement->position;
								$mainViewFormM->ordering = $ordering;
				$mainViewFormM->namekey = $namekeyContainer;
				$mainViewFormM->core = 0;
				$mainViewFormM->publish = 1;
				$mainViewFormM->returnId();
				$mainViewFormM->save();
				$parent = $mainViewFormM->fid;
			} else {
			}	
			$ordering += 500;
		}	
		$namekeyWidget = $namekeyStart . '_widget';
		$myWidgetParams = 'notitle=1
spantit=1
widgetid=' . $oneWidget->widgetid;
		if ( ! ( $fid = $this->_checkFromAlreadyInstalled( $namekeyWidget ) ) ) {
						$mainViewFormM->fid = null;
			$mainViewFormM->setChild( 'design.viewformstrans', 'name', $oneWidget->name );
												$mainViewFormM->yid = $this->_loadViewInfo( $yid, 'yid' );
			$mainViewFormM->type = 'main.widget';
			if ( !empty($formElement->position) )$mainViewFormM->area = $formElement->position;
						$mainViewFormM->ordering = $ordering;
			$mainViewFormM->namekey = $namekeyWidget;
			$mainViewFormM->parent = $parent;
			$mainViewFormM->core = 0;
			$mainViewFormM->publish = 1;
						$mainViewFormM->params = $myWidgetParams;
			$mainViewFormM->save();
		} else {
			$mainViewFormM->whereE( 'fid', $fid );
			$mainViewFormM->setVal( 'params', $myWidgetParams );
			$mainViewFormM->update();
		}	
	}	
}