<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_CoreFromname_form extends WForms_default {
function create() {
$urlUID = WGlobals::get( 'id' );
$uid = $this->getValue( 'uid' );
$receiveruid = $this->getValue( 'receiveruid' );
if ( $urlUID == $uid ) {
$this->content = WUser::get( 'name', $receiveruid );
} else {
$this->content = WUser::get( 'name', $uid );
}
return true;
}
}