<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Project_Savetask_controller extends WController {
	function savetask() {
		WPref::get('task');
		$this->_model = WModel::get('task');
		$this->getTruc();
		$status = $this->_model->save();
		WGlobals::setEID( $this->_model->pjid );
		return true;
	}
}