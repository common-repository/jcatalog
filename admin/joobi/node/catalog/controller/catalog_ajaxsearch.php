<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_ajaxsearch_controller extends WController {
	function ajaxsearch() {
		$var = self::getFormValue('kw');
		if ( empty($var) ) return true;
		$widgetId = WGlobals::get( 'widgetid' );
		if ( empty($widgetId) ) {
			$this->_oldCatalogSearch( false, $var );
		}		
		$widgetO = WModel::getElementData( 'main.widget', $widgetId );
		if ( empty($widgetO) || empty($widgetO->publish) ) return '';
		$tag = '{widget:item|';
		$type = WGlobals::get( 'itemType', '', null, 'task' );
		$wisdgetA = array();
		foreach( $widgetO as $k => $v ) {
			if ( 'type' == $k && !empty($type) ) continue;
			if ( !is_object($v) && !is_array($v) && !empty($v) ) $wisdgetA[] = $k . '=' . $v;
		}		
		if ( !empty($type) ) {
			$wisdgetA[] = 'type=' . $type;
		}		
		$tag .= implode( '|', $wisdgetA );
				if ( !empty($var) ) $tag .= '|search=' . $var;
				$tag .= '|widgetID=' . $widgetId;
		$tag .= '|widgetSlug=catalogAjaxSearch' .  $widgetId;
		$tag .= '}';
		$tagProcessC = WClass::get( 'output.process' );
		$tagProcessC->replaceTags( $tag );
				$stingToEcho = '<div><div class="clearfix" id="catalogAjaxResult"><div class="rowSeparator"></div>' . $tag . '</div></div>';
		echo $stingToEcho;
		return true;
	}
	private function _oldCatalogSearch($json=false,$var) {
$allParamsO = new stdClass;
$allParamsO->themeType = 'node';	$allParamsO->nodeName = 'catalog';
$allParamsO->search = $var;
$allParamsO->sorting = PCATALOG_NODE_AJAXSEARCHITMSORTING;
$allParamsO->layout = PCATALOG_NODE_AJAXSEARCHITMLAYOUT;
$allParamsO->layoutname = PCATALOG_NODE_AJAXSEARCHITMLAYOUTNAME;
$allParamsO->layout = ( !empty($AJAXSEARCHITMLAYOUT) ? PCATALOG_NODE_AJAXSEARCHITMLAYOUT : ( !empty($ajaxLayout) ? $ajaxLayout : 'badgemini') ) ;
$allParamsO->nb = PCATALOG_NODE_AJAXSEARCHITMNBDISPLAY;
$allParamsO->dontShowFree = ! PCATALOG_NODE_AJAXSEARCHITMSHOWFREE;
$allParamsO->showPrice = PCATALOG_NODE_AJAXSEARCHITMSHOWPRICE;
$allParamsO->showIntro = PCATALOG_NODE_AJAXSEARCHITMSHOWINTRO;
$allParamsO->showVendor = PCATALOG_NODE_AJAXSEARCHITMSHOWVENDOR;
$allParamsO->climit = PCATALOG_NODE_AJAXSEARCHITMCLIMIT;
$allParamsO->nlimit = PCATALOG_NODE_AJAXSEARCHITMNLIMIT;
$allParamsO->showNoRating = ! PCATALOG_NODE_AJAXSEARCHITMSHOWRATING;
$allParamsO->showReview = PCATALOG_NODE_AJAXSEARCHITMFEEDBACK;
$allParamsO->showNoImage = ! PCATALOG_NODE_AJAXSEARCHITMSHOWIMAGE;
$allParamsO->showMainCategory = PCATALOG_NODE_AJAXSEARCHITMSHOWCATEGORY;
$generalPageID = PCATALOG_NODE_CATALOGPGIDGENERAL;
$itemPageID = PCATALOG_NODE_CATALOGPGIDITEMS;
$allParamsO->pageID =  (!empty( $itemPageID ) ) ? $itemPageID : ( (!empty( $generalPageID ) ) ? $generalPageID : '');
$allParamsO->getadvsearch = true;
$allParamsO->widgetSlugID = 'search_ajax_item';
$allParamsO->widgetSlug = 'search_ajax_item';	
$productLoadC = WClass::get( 'item.load' );
$productA = $productLoadC->get( $allParamsO );
$productLoadC->extraProcess( $productA, $allParamsO );
$outputThemeC = WClass::get( 'output.theme' );
$outputThemeC->nodeName = 'catalog';
$outputThemeC->header = $productLoadC->setHeader();
$tag = $outputThemeC->createLayout( $productA, $allParamsO );
				$stingToEcho = '<div><div id="catalogAjaxResult" style="background-color:#f5f8fa;"><div class="rowSeparator"></div>' . $tag . '</div></div>';
		echo $stingToEcho;
	}	
}