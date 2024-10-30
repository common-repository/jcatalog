<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_CorePrivate_listing extends WListings_default{
function create() {
	$private = $this->getValue( 'private' );	
	if ($private )
			$this->content='<span class="label label-success">'. WText::t('1206732372QTKI').'</span>';
	else
			$this->content='<span class="label label-danger">'. WText::t('1206732372QTKJ').'</span>';
	return true;
}}