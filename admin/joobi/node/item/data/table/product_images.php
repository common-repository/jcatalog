<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_product_images_table extends WDataTable{
var $name='product_images';
var $namekey='product.images';
var $dbtid=324;
var $rolid='#allusers';
var $type=30;
var $pkey='filid,pid';
var $suffix='images';
var $group='product';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>1822,
'name'=>'filid',
'pkey'=>1,
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
'namekey'=>'324filid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'fileID',
'fieldtype'=>'output.media' ),
array(
'dbcid'=>1823,
'name'=>'pid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'324pid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'itemID',
'fieldtype'=>'' ),
array(
'dbcid'=>2017,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'324ordering',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6386,
'name'=>'premium',
'pkey'=>'0',
'checkval'=>'0',
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'premium324',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>324,
'ref_dbtid'=>306,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_product_images_pid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#product_node' ),
array(
'dbtid'=>324,
'ref_dbtid'=>478,
'name'=>'filid',
'name2'=>'filid',
'namekey'=>'FK_product_images_filid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#files#file_node' )
);

var $contraintsA=array(
array(
'ctid'=>65405,
'type'=>3,
'namekey'=>'PK_product_images_filid_pid' ),
array(
'ctid'=>66287,
'type'=>2,
'namekey'=>'IX_product_images_pid_premium_ordering' )
);
}