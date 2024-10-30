<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

defined('JOOBI_SECURE') or die('J....');
class Ticket_CoreIsprivate_listing extends WListings_default{
	function create() {
	$private = $this->getValue( 'private' );
		if ($private )
				$value='<span class="label label-success">'. WText::t('1219769905FKPR').'</span>';
			else
				$value='<span class="label label-danger">'. WText::t('1224166212FTLB').'</span>';
			$this->content=$value; 
	return true;
	}}