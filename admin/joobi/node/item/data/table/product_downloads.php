<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_product_downloads_table extends WDataTable{
var $name='product_downloads';
var $namekey='product.downloads';
var $dbtid=1016;
var $rolid='#allusers';
var $type=30;
var $pkey='pid,filid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>9417,
'name'=>'pid',
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
'namekey'=>'1016pid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'itemID',
'fieldtype'=>'' ),
array(
'dbcid'=>9418,
'name'=>'filid',
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
'namekey'=>'1016filid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'fileID',
'fieldtype'=>'output.media' ),
array(
'dbcid'=>9419,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
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
'namekey'=>'ordering1016',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>1016,
'ref_dbtid'=>306,
'name'=>'pid',
'name2'=>'pid',
'namekey'=>'FK_product_downloads_pid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#product_node' ),
array(
'dbtid'=>1016,
'ref_dbtid'=>478,
'name'=>'filid',
'name2'=>'filid',
'namekey'=>'FK_product_downloads_filid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#files#file_node' )
);

var $contraintsA=array(
array(
'ctid'=>65999,
'type'=>3,
'namekey'=>'PK_product_downloads' )
);
}