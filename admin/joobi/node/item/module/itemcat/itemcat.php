<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreItemcat_module extends WModule {
public function create() {
	$tag = '{widget:itemcat';
	$wisdgetA = array();
	$start = false;
	$tag .= '|';
	foreach( $this as $k => $v ) {
		if ( $k == 'module' ) $start = true;
		if ( ! $start ) continue;
		if ( !is_object($v) && !is_array($v) && !empty($v) ) $wisdgetA[] = $k . '=' . $v;
	}	$tag .= implode( '|', $wisdgetA );
		if ( !empty($this->module->id) ) $tag .= '|widgetID=' . $this->module->id;
	elseif ( !empty($this->widgetID) ) $tag .= '|widgetID=' . $this->widgetID;
	if ( !empty($this->module->module) ) $tag .= '|widgetSlug=' . $this->module->module;
	elseif ( !empty($this->widgetSlug) ) $tag .= '|widgetSlug=' . $this->widgetSlug;
	$tag .= '}';
	$tagProcessC = WClass::get( 'output.process' );
	$tagProcessC->replaceTags( $tag );
	$this->content = $tag;
	return true;
}
}