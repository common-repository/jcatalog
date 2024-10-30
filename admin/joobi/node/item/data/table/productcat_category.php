<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_productcat_category_table extends WDataTable{
var $name='productcat_category';
var $namekey='productcat.category';
var $dbtid=3447;
var $rolid='#allusers';
var $type=30;
var $pkey='catid,catidparent';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>10813,
'name'=>'catid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'3447catid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'categoryID',
'fieldtype'=>'' ),
array(
'dbcid'=>10814,
'name'=>'catidparent',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'3447catidparent',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>3447,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_productcat_category_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#productcat_node' )
);

var $contraintsA=array(
array(
'ctid'=>66227,
'type'=>3,
'namekey'=>'PK_productcat_category' )
);
}