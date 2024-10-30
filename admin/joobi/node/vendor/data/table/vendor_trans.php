<?php defined('JOOBI_SECURE') or die('J....');
class Data_vendor_vendor_trans_table extends WDataTable{
var $name='vendor_trans';
var $namekey='vendor.trans';
var $dbtid=989;
var $rolid='#allusers';
var $type=20;
var $pkey='vendid,lgid';
var $domain=51;
var $export=2;
var $engine=5;
var $node='vendor';
var $columnsA=array(
array(
'dbcid'=>8974,
'name'=>'vendid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'989vendid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'vendorID',
'fieldtype'=>'' ),
array(
'dbcid'=>8975,
'name'=>'lgid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'989lgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8982,
'name'=>'name',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>254.0,
'export'=>1,
'namekey'=>'name989',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8983,
'name'=>'description',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'description989',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8984,
'name'=>'auto',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>2,
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'auto989',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8985,
'name'=>'fromlgid',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'fromlgid989',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11107,
'name'=>'shorturl',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>250.0,
'export'=>1,
'namekey'=>'shorturl989',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>989,
'ref_dbtid'=>652,
'name'=>'vendid',
'name2'=>'vendid',
'namekey'=>'vendor_trans_vendid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#vendor#vendor_node' ),
array(
'dbtid'=>989,
'ref_dbtid'=>199,
'name'=>'lgid',
'name2'=>'lgid',
'namekey'=>'vendor_trans_lgid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#library#language_node' )
);

var $contraintsA=array(
array(
'ctid'=>65965,
'type'=>3,
'namekey'=>'PK_vendor_trans' ),
array(
'ctid'=>66288,
'type'=>2,
'namekey'=>'IX_vendor_trans_name' ),
array(
'ctid'=>66289,
'type'=>5,
'namekey'=>'FX_vendor_trans_name' ),
array(
'ctid'=>66290,
'type'=>5,
'namekey'=>'FX_vendor_trans_description' )
);

var $contraintsItemsA=array(
array(
'ctid'=>66289,
'dbcid'=>8982,
'ordering'=>1 ),
array(
'ctid'=>66290,
'dbcid'=>8983,
'ordering'=>1 )
);
}