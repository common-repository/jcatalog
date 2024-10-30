<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_Moderatorsrolid_filter {
function create(){
	$rolid = '';
	$namekey = array( 'author', 'manager', 'admin', 'sadmin', 'supportmanager', 'supportagent', 'supportmoderator' );
	$membersM = WModel::get('role');
	$membersM->whereIn('namekey',$namekey);
	$membersM->setLimit( 10000 );
	$rolid = $membersM->load('lra', 'rolid');
	return $rolid;
}}