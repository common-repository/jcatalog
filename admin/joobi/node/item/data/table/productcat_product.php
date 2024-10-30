<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_productcat_product_table extends WDataTable{
var $name='productcat_product';
var $namekey='productcat.product';
var $dbtid=338;
var $rolid='#allusers';
var $type=30;
var $pkey='catid,pid';
var $suffix='product';
var $group='productcat';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>1884,
'name'=>'catid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>5.0,
'export'=>1,
'namekey'=>'338catid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'categoryID',
'fieldtype'=>'' ),
array(
'dbcid'=>1885,
'name'=>'pid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'338pid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'itemID',
'fieldtype'=>'' ),
array(
'dbcid'=>6442,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>99,
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering338',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8800,
'name'=>'used',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'used338',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8818,
'name'=>'premium',
'pkey'=>'0',
'checkval'=>'0',
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'premium338',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>338,
'ref_dbtid'=>335,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_productcat_product_catid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#productcat_trans' ),
array(
'dbtid'=>338,
'ref_dbtid'=>306,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_productcat_product_pid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#item#product_node' )
);

var $contraintsA=array(
array(
'ctid'=>65409,
'type'=>3,
'namekey'=>'PK_product_categoryproduct_pid_catid' )
);
}