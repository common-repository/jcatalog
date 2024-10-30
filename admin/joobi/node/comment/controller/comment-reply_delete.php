<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_reply_delete_controller extends WController {
function delete() {
	parent::delete();
	$realVal =WGlobals::get('returnid');			
	$realVal = base64_decode($realVal);			
	return true;
}}