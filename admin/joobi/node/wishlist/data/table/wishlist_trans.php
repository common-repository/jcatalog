<?php defined('JOOBI_SECURE') or die('J....');
class Data_wishlist_wishlist_trans_table extends WDataTable{
var $name='wishlist_trans';
var $namekey='wishlist.trans';
var $dbtid=931;
var $rolid='#allusers';
var $type=20;
var $pkey='wlid,lgid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='wishlist';
var $columnsA=array(
array(
'dbcid'=>8525,
'name'=>'wlid',
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
'namekey'=>'931wlid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8526,
'name'=>'lgid',
'pkey'=>1,
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>4.0,
'export'=>1,
'namekey'=>'931lgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8527,
'name'=>'name',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'name931',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8528,
'name'=>'description',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'description931',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8529,
'name'=>'auto',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'auto931',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8530,
'name'=>'fromlgid',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'fromlgid931',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>931,
'ref_dbtid'=>930,
'name'=>'wlid',
'name2'=>'wlid',
'namekey'=>'FK_wishlist_node_wlid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>1,
'ref_table'=>'#wishlist#wishlist_node' )
);

var $contraintsA=array(
array(
'ctid'=>65888,
'type'=>3,
'namekey'=>'PK_wishlist_trans' )
);
}