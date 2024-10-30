<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreUnpublishapproval_button extends WButtons_external {
function create() {
	if ( WRoles::isAdmin( 'storemanager' ) ) return false;
	$unpublishApprove = WPref::load( 'PVENDORS_NODE_UNPUBLISHAPPROVE' );
	if (empty($unpublishApprove)) return false;
	$text = WText::t('1306763087RUZI');
	$this->setTitle( $text );
	$this->setIcon( 'unpublish' );
	$this->setAction( 'unpublishapproval' );
	return true;
}
}