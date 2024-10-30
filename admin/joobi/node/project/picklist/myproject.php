<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
 class Project_Myproject_picklist extends WPicklist {
	function create(){
		$user = WUser::get('uid');
		$this->addElement( $user , 'My project' );
	}
 }
