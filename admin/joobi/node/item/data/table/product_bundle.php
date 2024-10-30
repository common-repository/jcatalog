<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_product_bundle_table extends WDataTable{
var $name='product_bundle';
var $namekey='product.bundle';
var $dbtid=320;
var $rolid='#allusers';
var $type=1;
var $pkey='pid,ref_pid';
var $suffix='bundle';
var $group='product';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>1805,
'name'=>'pid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'320pid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'itemID',
'fieldtype'=>'' ),
array(
'dbcid'=>1806,
'name'=>'ref_pid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'320ref_pid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6784,
'name'=>'quantity',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'quantity320',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>517,
'ref_dbtid'=>320,
'name'=>'pid',
'name2'=>'ref_pid',
'namekey'=>'FK_license_extension_bundle_pid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>1,
'ref_table'=>'#license#license_extension' ),
array(
'dbtid'=>320,
'ref_dbtid'=>306,
'name'=>'ref_pid',
'name2'=>'pid',
'namekey'=>'FK_product_bundle_ref_pid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#product_node' ),
array(
'dbtid'=>320,
'ref_dbtid'=>306,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_product_bundle_pid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#item#product_node' ),
array(
'dbtid'=>320,
'ref_dbtid'=>517,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_product_bundle_pid_2',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>3,
'ref_table'=>'#license#license_extension' )
);

var $contraintsA=array(
array(
'ctid'=>65404,
'type'=>3,
'namekey'=>'PK_product_bundle_pid_ref_pid' )
);
}