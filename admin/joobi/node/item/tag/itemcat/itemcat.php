<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Item_Itemcat_tag {
 	var $smartUpdate = false;
 	var $nodeName = 'catalog';
	function process($givenTagsA) {
		static $count=1;
		$replacedTagsA = array();
		$productLoadC = WClass::get( 'item.loadcategory' );
		$outputThemeC = WClass::get( 'output.theme' );
		$outputThemeC->nodeName = $this->nodeName;
		$outputThemeC->header = $productLoadC->setHeader();
		$id = 'itmcatg_';
		foreach( $givenTagsA as $tag => $myTagO ) {
						if ( !empty($myTagO->auto) && empty($myTagO->parent) ) {
				$catid = WGlobals::get( 'catid' );
				if ( empty($catid) ) {
					$controller = WGlobals::get( 'controller');
					$task = WGlobals::get( 'task');
					if ( $controller=='catalog' && $task=='category' ) {
						$catid = WGlobals::get( 'eid' );
					}				}				if ( !empty( $catid ) ) $myTagO->parent = $catid;
			}
						$myTagO = $productLoadC->convertParams( $myTagO, false );
						$productA = $productLoadC->get( $myTagO );
			if ( empty( $productA ) ) {
				$myTagO->wdgtContent = '';
				$replacedTagsA[$tag] = $myTagO;
				continue;
			}
									$productLoadC->extraProcess( $productA, $myTagO );
			if ( empty($myTagO->widgetSlug) ) $myTagO->widgetSlug = $id . $count++;
			$outputThemeC->layoutPrefix = 'cat';
			$myTagO->wdgtContent = $outputThemeC->createLayout( $productA, $myTagO );
			$replacedTagsA[$tag] = $myTagO;
		}
		return $replacedTagsA;
	}
}