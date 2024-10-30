<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'form.layout' );
class Catalog_Productsearch_form extends WForm_layout {
function create() {
	$searchbox = WPref::load( 'PCATALOG_NODE_SEARCHBOX' );
	if ( empty($searchbox) ) return false;
	return parent::create();
}}