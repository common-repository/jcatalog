<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'form.text' );
class Catalog_Homesearch_form extends WForm_text {
function create() {
	$ajaxSearchO = WGlobals::get( 'catalogAjaxSearch', null, 'global' );
	$ajaxsearch = false;
	$extraLink = '';
	if ( WPref::load( 'PCATALOG_NODE_NEWFLEX' ) ) {
		if ( !empty($ajaxSearchO) && !empty($ajaxSearchO->widgetid) ) {
			$ajaxsearch = ( !empty($ajaxSearchO->ajaxsearch) ? $ajaxSearchO->ajaxsearch : false );
			$widgetIdentifer = WModel::getElementData( 'main.widget', $ajaxSearchO->widgetid, 'namekey' );
			$widgetResultID = WModel::getElementData( 'main.widget', $widgetIdentifer . 'ajaxresult', 'widgetid' );
			$publish = WModel::getElementData( 'main.widget', $widgetResultID, 'publish' );
			if ( empty($publish) ) {
				$ajaxsearch = false;
			} else {
				$extraLink = '&widgetid=' . $widgetResultID;
							}			
		}	} else {
		$ajaxsearch = WPref::load( 'PCATALOG_NODE_AJAXSEARCH' );
	}
	$type = WGlobals::get( 'type', '', null, 'task' );
	if ( !empty($type) ) {
		$extraLink .= '&itemType=' . $type;
	}	
		if ( !empty($ajaxsearch) ) {
				$jsString = $this->_getJSString( $extraLink );
		WPage::addJS( $jsString, 'text/javascript', true );
						WPage::addJSLibrary( 'jquery' );
						$content = '<div id="ajxresults"></div><div class="overlay"></div>';
	}
	$size = WGlobals::get( 'catalogSearchInputSize', '100%' );
	$this->element->width = $size;
	if ( empty($this->value) ) {
		$this->value = WText::t('1206732365OQJI') . '...';
		$this->extras = ' onblur="if (this.value==\'\') this.value=\'' . $this->value .'\';" onfocus="if (this.value==\'' . $this->value .'\') this.value=\'\';"';
	}
	$status = parent::create();
	if ( !empty($content) ) $this->content .= $content;
	return $status;
}
	private function _getJSString($extraLink) {
		$itemType = WGlobals::get( 'type' );
		$vendid = WGlobals::get( 'eid' );
		$page = WGlobals::get( 'controller' );
		$link = 'controller=catalog&task=ajaxsearch' . $extraLink;
						if( !empty($page) && $page == 'vendors' ) $link .= '&vendid=' . $vendid;
		if ( !empty($itemType) ) $link .= '&type=' . $itemType;
		$route = WPage::linkAjax( $link );
		$jsString = '
jQuery(document).ready(function(){
jQuery("#' . $this->idLabel . '").keyup(function(){
var kw = jQuery("#' . $this->idLabel . '").val();
if (kw != ""){
jQuery.ajax
({
url:"' . $route . '",
dataType:"html",
data:"kw="+ kw,
success: function(response){
var res = response;
jQuery("#ajxresults").html("");
var ajaxresres = jQuery(res).find("#catalogAjaxResult");
jQuery("#ajxresults").append(ajaxresres);
},
error: function(jqXHR,exception){
var acb = 12;
}
});
}else{
jQuery("#ajxresults").html("");
}
return false;
});
});
';
		return $jsString ;
	}
}