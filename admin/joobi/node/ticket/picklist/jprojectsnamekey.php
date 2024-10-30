<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Jprojectsnamekey_picklist extends WPicklist {
	function create() {
		$ticketProjM = WModel::get('project');
		$ticketProjM->makeLJ('projecttrans','pjid');
		$ticketProjM->select('namekey', 0);
		$ticketProjM->select('name', 1);
		$ticketProjM->whereE('publish', 1);
		$ticketProjM->whereE('ticket', 1);
		$list = $ticketProjM->load('ol');
		if (empty($list)) { return; }
		foreach($list as $project)  {
			$this->addElement($project->namekey, $project->name);
		}
	}}