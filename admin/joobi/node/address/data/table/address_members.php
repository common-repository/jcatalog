<?php defined('JOOBI_SECURE') or die('J....');
class Data_address_address_members_table extends WDataTable{
var $name='address_members';
var $namekey='address.members';
var $dbtid=339;
var $rolid='#allusers';
var $type=30;
var $pkey='adid,uid';
var $suffix='members';
var $group='address';
var $domain=51;
var $export=2;
var $engine=7;
var $node='address';
var $columnsA=array(
array(
'dbcid'=>1886,
'name'=>'adid',
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
'namekey'=>'339adid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1887,
'name'=>'uid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'339uid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>6183,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>1,
'ordering'=>3,
'level'=>'0',
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish339',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6184,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>9,
'ordering'=>4,
'level'=>'0',
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering339',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>339,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_address_members_uid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>339,
'ref_dbtid'=>323,
'name'=>'adid',
'name2'=>'adid',
'namekey'=>'FK_address_members_adid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#address#address_node' )
);

var $contraintsA=array(
array(
'ctid'=>65410,
'type'=>3,
'namekey'=>'PK_address_members_uid_adid' )
);
}