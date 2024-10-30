<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Project_Saveproject_controller extends WController {
	function saveproject() {
		WPref::get('project');
		$this->_model = WModel::get('project');
		$this->getTruc();
		$status = $this->_model->save();
		WGlobals::setEID( $this->_model->pjid );
		return true;
	}
}