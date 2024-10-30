<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Catalog_Type_type extends WTypes {
	var $type = array (
		'1' => 'product',
		'5' => 'subscription',
		'7' => 'voucher',
		'11' => 'auction',
		'16' => 'classified',
		'17' => 'lottery',
		'100' => 'item',	
		'101' => 'article',
		'117' => 'documentation',
		'121' => 'media',
		'141' => 'download'
	);
}