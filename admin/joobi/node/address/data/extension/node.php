<?php defined('JOOBI_SECURE') or die('J....');
class Data_Address_Node_extension extends WDataExtension{
var $publish=1;
var $folder='address';
var $wid=57;
var $type=150;
var $name='Address';
var $destination='node';
var $trans=1;
var $certify=1;
var $namekey='address.node';
var $version=6261;
var $lversion=6261;
var $pref=1;
var $install='';
var $description='1206961910HWMF';
var $descriptionTxt='address';
var $dependencyA=array('countries.node','PHPGoogleMaps.includes'
);

var $dependancyA=array(
array(
'namekey'=>'PHPGoogleMaps.includes',
'version'=>2231,
'type'=>175 )
);
}