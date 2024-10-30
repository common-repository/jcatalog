<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_Registered_filter {
function create() {
	$loguid = 1;	
	if (WUser::isRegistered())	$loguid = WUser::get('uid');	
	return $loguid ;
}}