<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Comment_reply_cancel_controller extends WController {
function cancel(){
	WPages::redirect('controller=comment');
	return true;
}}