<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Project_Saveextension_controller extends WController {
	function saveextension(){
		$truc = WGlobals::get( JOOBI_VAR_DATA );
		$sid = WModel::get('project.extension','sid');
		if (is_array($truc) && isset($truc[$sid])){
			$this->_model = WModel::get('project.extension');
			$this->_model->getFormData();
			$this->_model->save();
			return WText::t('1209674941LKQU');
		}
		else {
			return WText::t('1209674941LKQV');
		}
	}
}