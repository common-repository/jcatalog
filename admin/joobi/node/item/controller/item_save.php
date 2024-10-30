<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Save_controller extends WController {
	function save() {
		$status = parent::save();
		if ( !$status ) return $status;
		if ( empty($this->_model->numcat) ) {
			$name = $this->_model->getChild( $this->_model->getModelNamekey() . 'trans', 'name' );
			$this->userN('1338404830HCNT');
			WPages::redirect( 'controller=item-category-assign&task=listing&pid=' . $this->_model->pid.'&prodtypid=' . $this->_model->prodtypid . '&titleheader='. $name );
		}
		return $status;
	}
}