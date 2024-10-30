<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Project_Role_type extends WTypes {
	var $role = array(
		''=>'-',
		'20'=>'Team member',
		'10'=>'Project Manager',
		'1'=>'Project Sponsor',	
		'200'=>'Observer'
		);
 }
