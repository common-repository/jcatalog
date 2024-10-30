<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Mailbox_Box_type extends WTypes {
	var $box = array(
		1 => 'Inbox',
		10 => 'Sent',
		20 => 'Archive',
		30 => 'Trash',
		40 => 'Spam',
	);
}