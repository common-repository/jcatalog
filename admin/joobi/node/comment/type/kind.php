<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_Kind_type extends WPicklist {
var $type = array(
	'10' => 'Feature Request',
	'20' => 'Bug Report',
	'100' => 'License Issue',
	'110' => 'Other Inquiries'
  );
}