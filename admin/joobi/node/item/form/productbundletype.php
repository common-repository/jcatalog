<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreProductbundletype_form extends WForms_default {
function create() {
	if ( !empty($this->data->bdlgeneral) ) return false;
	$text = '<span class="label label-danger" style="font-weight:bold">' . WText::t('1418159973LMLW') . '</span>';
	$this->content = $text;
return true;
}
function show() {
return $this->create();
}}