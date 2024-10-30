<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_productcat_type_table extends WDataTable{
var $name='productcat_type';
var $namekey='productcat.type';
var $dbtid=3472;
var $rolid='#allusers';
var $type=30;
var $pkey='catid,prodtypid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>10942,
'name'=>'catid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>'0',
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'3472catid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'categoryID',
'fieldtype'=>'' ),
array(
'dbcid'=>10943,
'name'=>'prodtypid',
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
'namekey'=>'3472prodtypid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>3472,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_productcat_type_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#productcat_node' )
);

var $contraintsA=array(
array(
'ctid'=>66248,
'type'=>3,
'namekey'=>'PK_productcat_type' )
);
}