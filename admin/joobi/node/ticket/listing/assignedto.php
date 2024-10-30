<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreAssignedto_listing extends WListings_default{
function create() {
	static $moderators = array();
	$assignUid = $this->value;
	if (empty($moderators[$assignUid])) {
		static $membersM = null;
		if (!isset($membersM))$membersM = WModel::get( 'users' );
		$membersM->whereE( 'uid', $assignUid);
		$moderators[$assignUid] = $membersM->load( 'lr', 'name' );
	}
	$this->content = $moderators[$assignUid];
return true;
}}