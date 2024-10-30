<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_mailbox_saveemail_picklist extends WDataPicklist{
var $wid='#mailbox.node';
var $outype=6;
var $type=1;
var $did=1127;
var $namekey='mailbox_saveemail';
var $first_all=0;
var $lib_ext=0;
var $rolid='#allusers';
var $alias='Save Email';
var $name='1470801882CXGN';
var $description='';
var $valuesA=array(
array(
'vid'=>977,
'publish'=>1,
'params'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'#allusers',
'value'=>2,
'valuetxt'=>'',
'premium'=>1,
'namekey'=>'mailbox_saveemail_save',
'core'=>1,
'color'=>'',
'parent'=>'',
'inputbox'=>'0',
'name'=>'1448452745BFNO' ),
array(
'vid'=>978,
'publish'=>1,
'params'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'#allusers',
'value'=>1,
'valuetxt'=>'',
'premium'=>'0',
'namekey'=>'mailbox_saveemail_only',
'core'=>1,
'color'=>'',
'parent'=>'',
'inputbox'=>'0',
'name'=>'1448452745BFNP' ),
array(
'vid'=>979,
'publish'=>1,
'params'=>'',
'ordering'=>3,
'level'=>'0',
'rolid'=>'#allusers',
'value'=>'0',
'valuetxt'=>'',
'premium'=>'0',
'namekey'=>'mailbox_saveemail_delete',
'core'=>1,
'color'=>'',
'parent'=>'',
'inputbox'=>'0',
'name'=>'1448582285JCXM' )
);
}