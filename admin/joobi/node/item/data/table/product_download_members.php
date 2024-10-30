<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_product_download_members_table extends WDataTable{
var $name='product_download_members';
var $namekey='product.download.members';
var $dbtid=982;
var $rolid='#allusers';
var $type=30;
var $pkey='dmid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>8915,
'name'=>'dmid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'982dmid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8916,
'name'=>'pid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'pid982',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'itemID',
'fieldtype'=>'' ),
array(
'dbcid'=>8917,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'uid982',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>8919,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'created982',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>982,
'ref_dbtid'=>306,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_product_download_members_pid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#product_node' ),
array(
'dbtid'=>982,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_product_download_members_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#users#members_node' )
);

var $contraintsA=array(
array(
'ctid'=>65948,
'type'=>3,
'namekey'=>'PK_product_download_members' )
);
}