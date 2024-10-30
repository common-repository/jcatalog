<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_mailbox_messages_table extends WDataTable{
var $name='mailbox_messages';
var $namekey='mailbox.messages';
var $dbtid=735;
var $rolid='#allusers';
var $type=1;
var $pkey='msgid';
var $suffix='messages';
var $group='mailbox';
var $domain=51;
var $export=2;
var $engine=7;
var $node='mailbox';
var $columnsA=array(
array(
'dbcid'=>7035,
'name'=>'msgid',
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
'namekey'=>'735msgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7036,
'name'=>'inbid',
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
'namekey'=>'inbid735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7037,
'name'=>'sender',
'pkey'=>'0',
'checkval'=>1,
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
'namekey'=>'email735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7038,
'name'=>'header',
'pkey'=>'0',
'checkval'=>1,
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
'namekey'=>'header735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7039,
'name'=>'type',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>1,
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'type735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7040,
'name'=>'subject',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'subject735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7041,
'name'=>'body',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'body735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7042,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'created735',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7455,
'name'=>'box',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'box735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7487,
'name'=>'size',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'size735',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>735,
'ref_dbtid'=>681,
'name'=>'inbid',
'name2'=>'inbid',
'namekey'=>'FX_mailbox_message_inbid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#mailbox#mailbox_node' )
);

var $contraintsA=array(
array(
'ctid'=>65665,
'type'=>3,
'namekey'=>'PK_mailbox_messages' ),
array(
'ctid'=>66135,
'type'=>2,
'namekey'=>'IX_mailbox_messages_inbid' )
);
}