<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */

 defined('JOOBI_SECURE') or die('J....');
class Ticket_Ratecolor_picklist extends WPicklist {
function create(){
	$ratecolor= array(
		'yellow' => 'Default',
		'red'	=> 'Red',
		'orange' => 'Orange',
		'blue'	=> 'Blue'
	);
	$this->defaultValue = 'red';			
	foreach($ratecolor as $index => $value){
		$this->addElement($index, $value);
	}
	return true;
}
}