<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Address_Map_tag {	 	
 	var $smartUpdate = false;
	function process($givenTagsA) {
		static $count = 0;
		$replacedTagsA = array();
		$productLoadC = WClass::get( 'item.load' );
		$outputThemeC = WClass::get( 'output.theme' );
		$outputThemeC->nodeName = ( empty( $this->nodeName ) ? 'catalog' : $this->nodeName );
		$outputThemeC->header = $productLoadC->setHeader();
		foreach( $givenTagsA as $tag => $myTagO ) {
			$count++;
			$myTagO->widgetSlug = 'addMap' . $count;
						$productA = $productLoadC->get( $myTagO );
						if ( !empty($myTagO->countOnly) ) {
				$replacedTagsA[$tag] = $myTagO->totalCount;
				continue;
			}
			if ( empty( $productA ) ) {
				$myTagO->wdgtContent = '';
				$replacedTagsA[$tag] = $myTagO;
				continue;
			}
									$productLoadC->extraProcess( $productA, $myTagO );
			$myTagO->wdgtContent = $outputThemeC->createLayout( $productA, $myTagO );
			$replacedTagsA[$tag] = $myTagO;
		}
		return $replacedTagsA;
	}
}