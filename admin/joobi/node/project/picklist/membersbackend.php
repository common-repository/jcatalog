<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
 class Project_Membersbackend_picklist extends WPicklist {
	function create() {
		if ( $this->onlyOneValue() ) {		
			$uid = $this->getDefault();
			if ( empty($uid) ) return true;
			$member = WUser::get('data', $uid );
			if ( !empty($member) ) $this->addElement( $member->uid, $member->name);
			return true;
		}
				$maps=array('uid', 'name');
		$members = WUser::getRoleUsers('manager', $maps);
				foreach($members as $member) {
			$this->addElement( $member->uid, $member->name );
		}
	}
 }
