<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CorePublishapproval_button extends WButtons_external {
	function create() {
		if ( WRoles::isAdmin( 'storemanager' ) ) return false;
		$publishApprove = WPref::load( 'PVENDORS_NODE_PUBLISHAPPROVE' );
		if ( empty($publishApprove) ) return false;
		$text = WText::t('1306763087RUZH');
		$this->setTitle( $text );
		$this->setIcon( 'publish' );
		$this->setAction( 'publishapproval' );
		return true;
	}
}