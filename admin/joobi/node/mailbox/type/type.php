<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Mailbox_Type_type extends WTypes {
	var $type = array(
				1 =>'undefined',
				2 =>'unknown',
				5 =>'bounce',
						17 =>'Spam',
				15 =>'Require Confirmation',			
			19 =>'Unsubscribe',
						10 =>'Autoreply', 				20=>'Successfully Received',
				25 =>'Replies',
						35 =>'Email Added To',						
				30=>'Do Not Reply',
				40 =>'Email Address Changed',
				100 =>'standard'
	);
}