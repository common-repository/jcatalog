<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Widgets_class extends WClasses {
	public function installWidgets($type='',$viewExist=true) {
		if ( ! WGet::readConfig( 'install' ) ) {
			if ( empty( $type ) ) {
								$prodtypid = WGlobals::get( 'prodtypid' );
				if ( !empty($prodtypid) ) {
					$itemTypeC = WClass::get( 'item.type' );
					$type = $itemTypeC->loadTypeData( $prodtypid, 'type' );
				} else {
					$type = WGlobals::get( 'type' );
				}				
			}			
						if ( !empty( $type ) ) {
				$itemDesignation = WView::picklist( 'item_designation_type' );
				if ( ! $itemDesignation->inIdentifiers($type) ) $type='';
			}			
		}		
		$viewType = ( !empty($type) ? '_' . $type : '' );
		$idType = ( !empty($type) ? '.' . $type : '' );
		WText::load( 'item.node' );
				$view = new stdClass;
		$view->view = 'catalog_home_page' . $viewType;
		if ( ! $viewExist ) {
			$this->_createView( $view, $type );
		} else {
			$this->_createView( $view, $type );
		}		
				$allWidgetsA = array();
				$widget = new stdClass;
		$widget->view = 'catalog_home_page' . $viewType;
		$widget->viewName = WText::t('1206961997BSZK');
		$widget->viewAlias = 'Catalog home page for ' . $type;
		$widget->namekey = 'catalog.home' . $idType . '.banner';
		$widget->alias = 'Catalog Home Page ' . $type . ': Banner';
		$widget->name = WText::t('1242282414LZLM');
		$widget->widgetType = 'catalog.banner';
		$widget->formElement = new stdClass;
		$widget->formElement->ordering = 1;
						$widget->params = 'usecache=1
banner=node/catalog/images/joobi-ecommerce.jpg';
				$allWidgetsA[] = $widget;
				$widgetSearch = new stdClass;
		$widgetSearch->view = 'catalog_home_page' . $viewType;
		$widgetSearch->viewName = WText::t('1206961997BSZK');
		$widgetSearch->viewAlias = 'Catalog home page for ' . $type;
		$widgetSearch->namekey = 'catalog.home' . $idType . '.search';
		$widgetSearch->alias = 'Catalog Home Page ' . $type . ': Search';
		$widgetSearch->name = WText::t('1206732365OQJI');
		$widgetSearch->widgetType = 'catalog.search';
		$widgetSearch->formElement = new stdClass;
		$widgetSearch->formElement->ordering = 2;
								$widgetSearch->params = 'showtitle=1
wrapper=pane
ajaxsearch=1
searchtype=1
searchcategory=1
searchlocation=1
ajaxsorting=newest
ajaxnbdisplay=6
ajaxlayout=badge
ajaxshowprice=1
ajaxshowimage=1';
		$allWidgetsA[] = $widgetSearch;
				$widget = new stdClass;
		$widget->namekey = 'catalog.home' . $idType . '.searchajaxresult';
		$widget->alias = 'Catalog Home Page ' . $type . ': Ajax Search Results';
		$widget->name = WText::t('1450206890DIEJ');
		$widget->widgetType = 'item.item';
		$widget->params = 'showtitle=1
sorting=newest
display=standard
bordershow=1
numdisplay=9
layout=badge
layoutcol=1
showname=1
showprice=1
showvendor=1
showimage=1
imagewidth=80
imageheight=80';
				$allWidgetsA[] = $widget;
				$widget = new stdClass;
		$widget->view = 'catalog_home_page' . $viewType;
		$widget->viewName = WText::t('1206961997BSZK');
		$widget->viewAlias = 'Catalog home page for ' . $type;
		$widget->namekey = 'catalog.home' . $idType . '.carrousel';
		$widget->alias = 'Catalog Home Page ' . $type . ': Carrousel';
		$widget->name = WText::t('1304526971HCDU');
		$widget->widgetType = 'item.item';
		$widget->formElement = new stdClass;
		$widget->formElement->ordering = 4;
						$widget->params = 'showtitle=1
wrapper=pane
sorting=newest
sortingpresentation=picklist
display=carrousel
bordershow=1
numdisplay=6
layout=badge
layoutcol=3
carrouselarrow=1
showname=1
showprice=1
share=favorite,wish
mouseover=imagezoomeffect
showimage=1
imagewidth=200
imageheight=200
showcolumn=1
badgenew=1';
				$allWidgetsA[] = $widget;
				$widget = new stdClass;
		$widget->view = 'catalog_home_page' . $viewType;
		$widget->viewName = WText::t('1206961997BSZK');
		$widget->viewAlias = 'Catalog home page for ' . $type;
		$widget->namekey = 'catalog.home' . $idType . '.item';
		$widget->alias = 'Catalog Home Page ' . $type . ': Items';
		$widget->name = WText::t('1233642085PNTA');
		$widget->widgetType = 'item.item';
		$widget->formElement = new stdClass;
		$widget->formElement->ordering = 5;
						$widget->params = 'showtitle=1
wrapper=pane
sorting=newest
availsort=newest,oldest,featured,sold
sortingpresentation=picklist
display=standard
bordershow=1
numdisplay=9
layout=badge
layoutcol=3
pagination=1
showname=1
showintro=1
showprice=1
showvendor=1
showquestion=1
share=favorite,wish
mouseover=secondimage
showimage=1
imagewidth=200
imageheight=200
showcolumn=1
showall=1';
				$allWidgetsA[] = $widget;
				$widgetMap = new stdClass;
		$widgetMap->view = 'catalog_home_page' . $viewType;
		$widget->viewName = WText::t('1206961997BSZK');
		$widget->viewAlias = 'Catalog home page for ' . $type;
		$widgetMap->namekey = 'catalog.home' . $idType . '.itemmap';
		$widgetMap->alias = 'Catalog Home Page ' . $type . ': Items Map';
		$widgetMap->name = WText::t('1373216472CELD');
		$widgetMap->widgetType = 'item.itemmap';
		$widgetMap->formElement = new stdClass;
		$widgetMap->formElement->ordering = 6;
						$widgetMap->params = 'showtitle=1
wrapper=pane
allitems=1
nb=1000
width=600
height=350';
				$allWidgetsA[] = $widgetMap;
				$widget = new stdClass;
		$widget->view = 'catalog_home_page' . $viewType;
		$widget->viewName = WText::t('1206961997BSZK');
		$widget->viewAlias = 'Catalog home page for ' . $type;
		$widget->namekey = 'catalog.home' . $idType . '.category';
		$widget->alias = 'Catalog Home Page ' . $type . ': Categories';
		$widget->name = WText::t('1206732411EGQQ');
		$widget->widgetType = 'item.itemcat';
		$widget->formElement = new stdClass;
		$widget->formElement->ordering = 7;
						$widget->params = 'showtitle=1
wrapper=pane
sorting=alphabetic
display=standard
level=1
layout=badge
layoutcol=4
showname=1
showimage=1
imagewidth=120
imageheight=120
showcolumn=1
showall=1
prodtypid=2';
				$allWidgetsA[] = $widget;
		if ( WExtension::exist( 'vendors.node' ) ) {
						$widget = new stdClass;
			$widget->view = 'catalog_home_page' . $viewType;
			$widget->viewName = WText::t('1206961997BSZK');
			$widget->viewAlias = 'Catalog home page for ' . $type;
			$widget->namekey = 'catalog.home' . $idType . '.vendors';
			$widget->alias = 'Catalog Home Page ' . $type . ': Vendors';
			$widget->name = WText::t('1220793715LTKS');
			$widget->widgetType = 'vendors.vendors';
			$widget->formElement = new stdClass;
			$widget->formElement->ordering = 8;
									$widget->params = 'showtitle=1
wrapper=pane
sorting=newest
display=standard
carrouselarrow=1
layout=badge
layoutcol=4
layoutbbrow=2
showrating=1
showdesc=1
showimage=1
imagewidth=200
imageheight=200';
						$allWidgetsA[] = $widget;
						$widget = new stdClass;
			$widget->view = 'catalog_home_page' . $viewType;
			$widget->viewName = WText::t('1206961997BSZK');
			$widget->viewAlias = 'Catalog home page for ' . $type;
			$widget->namekey = 'catalog.home' . $idType . '.vendorsmap';
			$widget->alias = 'Catalog Home Page ' . $type . ': Vendors Map';
			$widget->name = WText::t('1373216472CELJ');
			$widget->widgetType = 'vendors.vendorsmap';
			$widget->formElement = new stdClass;
			$widget->formElement->ordering = 9;
									$widget->params = 'showtitle=1
wrapper=pane
allitems=0
nb=1000
width=600
height=350';
						$allWidgetsA[] = $widget;
		}		
				$widgetSearch = clone($widgetSearch);
				$widgetSearch->view = 'catalog_search_results' . $viewType;
		$widgetSearch->viewName = WText::t('1373216472CELC');
		$widgetSearch->viewAlias = 'Catalog Search Results for ' . $type;
		$widgetSearch->namekey = 'catalog.home' . $idType . '.search';
		$widgetSearch->formElement = new stdClass;
		$widgetSearch->formElement->ordering = 1;
				$allWidgetsA[] = $widgetSearch;
				$widget = new stdClass;
		$widget->view = 'catalog_search_results' . $viewType;
		$widget->viewName = WText::t('1373216472CELC');
		$widget->viewAlias = 'Catalog Search Results for ' . $type;
		$widget->namekey = 'catalog.searchresults' . $idType . '.item';
		$widget->alias = 'Catalog Search Results ' . $type . ': Items';
		$widget->name = WText::t('1373216472CELC');
		$widget->widgetType = 'item.item';
		$widget->formElement = new stdClass;
		$widget->formElement->ordering = 2;
		$widget->params = 'showtitle=1
wrapper=pane
sorting=newest
availsort=newest,featured,sold
sortingpresentation=picklist
display=standard
bordershow=1
numdisplay=20
layout=badgebig
layoutcol=1
pagination=1
showname=1
showprice=1
addcart=1
showrating=1
share=favorite,wish
mouseover=secondimage
showimage=1
imagewidth=150
imageheight=150
showcolumn=1
showall=1';
				$allWidgetsA[] = $widget;
						$widgetMap = clone($widgetMap);
						$widgetMap->view = 'catalog_search_results' . $viewType;
		$widgetMap->viewName = WText::t('1373216472CELC');
		$widgetMap->viewAlias = 'Catalog Search Results for ' . $type;
		$widgetMap->namekey = 'catalog.home' . $idType . '.itemmap';
								$widgetMap->formElement = new stdClass;
		$widgetMap->formElement->ordering = 3;
		$widgetMap->params = 'showtitle=1
wrapper=pane
allitems=0
nb=1000
width=600
height=350';		
				$allWidgetsA[] = $widgetMap;
				$widget = new stdClass;
		$widget->view = 'catalog_items_page' . $viewType;
		$widget->viewName = WText::t('1450459963AKUB');
		$widget->viewAlias = 'List of all Items for ' . $type;
		$widget->namekey = 'catalog.list' . $idType . '.item';
		$widget->alias = 'All Items List ' . $type;
		$widget->name = WText::t('1233642085PNTA');
		$widget->widgetType = 'item.item';
		$widget->formElement = new stdClass;
		$widget->formElement->ordering = 1;
		$widget->params = 'showtitle=1
wrapper=pane
sorting=newest
availsort=newest,oldest,featured,sold
sortingpresentation=picklist
display=standard
bordershow=1
numdisplay=9
layout=badge
layoutcol=3
pagination=1
showname=1
showintro=1
showprice=1
showvendor=1
showquestion=1
share=favorite,wish
mouseover=secondimage
showimage=1
imagewidth=200
imageheight=200
showcolumn=1
showall=1';
				$allWidgetsA[] = $widget;		
		foreach( $allWidgetsA as $widget ) {
			if ( !empty($widget->view) ) {
				$this->_createView( $widget );
			}		}		
		return $allWidgetsA;
	}
	private function _createView($view,$type='') {
		$namekey = $view->view;
		$mainViewM = WModel::get( 'library.view' );
		$mainViewM->whereE( 'namekey', $namekey );
		if ( $mainViewM->exist() ) return true;
		$view = new stdClass;
		if ( empty($view->viewName) ) $view->viewName = WText::t('1206961997BSZK');
		if ( empty($view->viewDesc) ) $view->viewDesc = 'Catalog home page for ' . $type;
		if ( empty($view->viewAlias) ) $view->viewAlias = 'Catalog Home Page for ' . $type;
						$mainViewM->namekey = $namekey;
		$mainViewM->wid = WExtension::get( 'catalog.node' );
		$mainViewM->setChild( 'library.viewtrans', 'name', $view->viewName );
		if ( !empty($view->viewDesc) ) $mainViewM->setChild( 'library.viewtrans', 'description', $view->viewDesc );
		$mainViewM->alias = $view->viewAlias;
		$mainViewM->type = 109;
		$mainViewM->frontend = 1;
		$mainViewM->widgets = 1;
		$mainViewM->useredit = 1;
		$mainViewM->menu = 0;
		$mainViewM->rolid = WRoles::getRole( 'allusers' );
		$mainViewM->core = 0;
		$mainViewM->publish = 1;
		$mainViewM->save();
				$cache = WCache::get();
		$cache->resetCache( 'Views' );
	}	
}