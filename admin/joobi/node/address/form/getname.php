<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
WView::includeElement( 'form.text' );
class Address_Getname_form extends WForm_text {
function create() {
  $this->value = WUser::get('name');
  return parent::create();
 }}