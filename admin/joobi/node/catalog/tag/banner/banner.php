<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Catalog_Banner_tag {	 	
 	var $smartUpdate = false;
 	var $nodeName = 'catalog';
	public function process($givenTagsA) {
		$replacedTagsA = array();
		foreach( $givenTagsA as $tag => $myTagO ) {
			if ( empty( $myTagO->banner ) || 'mobile' == JOOBI_FRAMEWORK_TYPE ) {					$myTagO->wdgtContent = '';
				$replacedTagsA[$tag] = $myTagO;
				continue;
			}			
			if ( substr( $myTagO->banner, 0, 19 ) == 'node/catalog/images' ) {
				$bannerURL = JOOBI_URL_THEME_JOOBI . $myTagO->banner;
			} else {
				$bannerURL = $myTagO->banner;
			}			
			if ( !empty($myTagO->showrss) ) {
				$data = new stdClass;
				$data->type = 'rss';
				$data->link = WPage::routeURL( 'controller=item&task=rss&jdoctype=230' );
				$displayRSS = WPage::renderBluePrint( 'others', $data );
				$myTagO->extraHeader = '<div id="rssFeed">' . $displayRSS . '</div>';
			}			
			$myTagO->wdgtContent = '<div class="catalogBanner"><img alt="Banner" src="' . $bannerURL . '"></div>';
			$replacedTagsA[$tag] = $myTagO;
		}
		return $replacedTagsA;
	}
}