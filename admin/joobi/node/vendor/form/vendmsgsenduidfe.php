<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Vendor_CoreVendmsgsenduidfe_form extends WForms_default {
	function create() {
		$sentoid = WGlobals::get( 'uid' );
		if ( !empty($sentoid) )	{
			$this->value = $sentoid;
			$vendorHelperC = WClass::get('vendor.helper',null,'class',false);
			$vendid = $vendorHelperC->getVendorID( $sentoid );
			$vendObj = $vendorHelperC->getVendor( $vendid );
			$this->content = '<span class="label label-success">' . $vendObj->name . '</span>';	
$formObject = WView::form( $this->formName );
$modelID = WModel::getID( 'vendor.conversation' );
			$formObject->hidden( JOOBI_VAR_DATA . '[' . $modelID . '][receiveruid]', $sentoid, false, true );			
		}
		else return parent::create();
		return true;
	}}