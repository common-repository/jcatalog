<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Project_Deleteshow_controller extends WController {
	function deleteshow() {
		parent::delete();
		return true;
	}
}