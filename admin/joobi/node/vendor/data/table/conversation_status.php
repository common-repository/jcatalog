<?php defined('JOOBI_SECURE') or die('J....');
class Data_vendor_conversation_status_table extends WDataTable{
var $name='conversation_status';
var $namekey='conversation.status';
var $dbtid=476;
var $rolid='#allusers';
var $type=30;
var $pkey='uid,mcid';
var $suffix='status';
var $group='conversation';
var $domain=51;
var $export=2;
var $engine=7;
var $node='vendor';
var $columnsA=array(
array(
'dbcid'=>3398,
'name'=>'mcid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'476mcid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3399,
'name'=>'uid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'476uid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>3288,
'name'=>'replies',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'476replies',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3397,
'name'=>'isread',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'476isread',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>476,
'ref_dbtid'=>458,
'name'=>'mcid',
'name2'=>'mcid',
'namekey'=>'FK_conv_status_mcid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#vendor#conversation_node' ),
array(
'dbtid'=>476,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_conv_status_uid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#users#members_node' )
);

var $contraintsA=array(
array(
'ctid'=>65429,
'type'=>3,
'namekey'=>'PK_conv_status_uid_mcid' )
);
}