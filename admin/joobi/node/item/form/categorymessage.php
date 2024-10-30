<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_CoreCategorymessage_form extends WForms_default {
function create() {
	if ( !empty($this->data->ctygeneral) ) return false;
	$text = '<span class="label label-danger" style="font-weight:bold;">' . WText::t('1418159973LMLU') . '</span>';
	$text .= '<br /><span style="color:orange;font-weight:bold;">' . WText::t('1418159973LMLV') . '</span>';
	$this->content = $text;
return true;
}
function show() {
return $this->create();
}
}