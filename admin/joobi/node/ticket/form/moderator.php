<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreModerator_form extends WForms_default {
function create(){
	$this->content = WUser::get('name');
		return true;
}}