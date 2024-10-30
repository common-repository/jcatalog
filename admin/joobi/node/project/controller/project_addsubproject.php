<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Project_Addsubproject_controller extends WController {
	function addsubproject() {
		WGlobals::setEID( 0);
		$this->setView( 'project_milestone_form');
		return true;
	}
}