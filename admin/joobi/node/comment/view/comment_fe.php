<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_Comment_fe_view extends Output_Listings_class {
function prepareView() {
		if ( ! WPref::load( 'PCOMMENT_NODE_ALLOWIMAGE' ) ) {
			$this->removeElements( 'comments_fe_commenttrans_filid' );
			$this->removeConditions( 'comment_fe_groupby_filid' );
		}
		return true;
	}}