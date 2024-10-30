<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Secure_type extends WTypes {
			var $secure = array(
				0 => '- - -',
				'ssl' => 'SSL',
				'tls' => 'TLS',
  			);
}