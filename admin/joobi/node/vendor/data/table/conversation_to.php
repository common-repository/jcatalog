<?php defined('JOOBI_SECURE') or die('J....');
class Data_vendor_conversation_to_table extends WDataTable{
var $name='conversation_to';
var $namekey='conversation.to';
var $dbtid=459;
var $rolid='#allusers';
var $type=30;
var $pkey='uid,mcid';
var $suffix='to';
var $group='conversation';
var $domain=51;
var $export=2;
var $engine=7;
var $node='vendor';
var $columnsA=array(
array(
'dbcid'=>3226,
'name'=>'mcid',
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
'namekey'=>'459mcid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3228,
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
'namekey'=>'459uid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>459,
'ref_dbtid'=>458,
'name'=>'mcid',
'name2'=>'mcid',
'namekey'=>'FK_conversation_to_mcid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#vendor#conversation_node' ),
array(
'dbtid'=>459,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_conversation_to_uid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#users#members_node' )
);

var $contraintsA=array(
array(
'ctid'=>65427,
'type'=>3,
'namekey'=>'PK_conv_to_uid_mcid' )
);
}