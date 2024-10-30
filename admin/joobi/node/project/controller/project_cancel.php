<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Project_cancel_controller extends WController {
	function cancel() {
		if (isset($this->_eid[0])) {
			$pjid=$this->_eid[0];
			$sql=WModel::get('project');
			$sql->select('parent');
			$sql->whereE('pjid', $pjid);
			$parent=$sql->load('lr');
			WGlobals::set('pjid',$parent);
		}
		return true;
	}}