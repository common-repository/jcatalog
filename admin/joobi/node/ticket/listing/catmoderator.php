<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreCatmoderator_listing extends WListings_default{
function create(){
	$categoryMdtrM = null;
	if (!isset($categoryMdtrM))	$categoryMdtrM = WModel::get('ticket.projectmembers');
	$categoryMdtrM->select('pjid', 0, null,'count');
	$categoryMdtrM->whereE('uid', $this->value);
	$totalCategoryV = $categoryMdtrM->load('lr');
	$messageV = $this->element->textlink;
	$this->content= $messageV.'('.$totalCategoryV.')';
	return true;	
}}