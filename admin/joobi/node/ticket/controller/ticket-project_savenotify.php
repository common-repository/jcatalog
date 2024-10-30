<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_project_savenotify_controller extends WController {
function savenotify(){
	$sid = $this->sid;			
	$pjid = $this->_eid[0];			
	$trk = WGlobals::get( JOOBI_VAR_DATA );	
	$oncreation = $trk[$sid]['oncreation'];	
	$onreplies = $trk[$sid]['onreplies'];
	$toassigned = $trk[$sid]['toassigned'];
	$sendcopy = $trk[$sid]['sendcopy'];
	$tkprojectM = WModel::get('ticket.project');
	$tkprojectM->whereE('pjid',$pjid);
	$tkprojectM->setVal('oncreation',$oncreation);
	$tkprojectM->setVal('onreplies',$onreplies);
	$tkprojectM->setVal('toassigned',$toassigned);
	$tkprojectM->setVal('sendcopy',$sendcopy);
	$tkprojectM->update();
	WPages::redirect('controller=ticket-project');
	return true;
}}