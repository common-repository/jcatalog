<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Termstrans_model extends WModel {
	public function validate() {
		$this->auto = 2;
		return true;
	}}