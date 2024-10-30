<?php defined('JOOBI_SECURE') or die('J....');
class Data_email_mailing_queue_table extends WDataTable{
var $name='mailing_queue';
var $namekey='mailing.queue';
var $dbtid=1019;
var $rolid='#allusers';
var $type=1;
var $pkey='qid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='email';
var $columnsA=array(
array(
'dbcid'=>9467,
'name'=>'qid',
'pkey'=>1,
'checkval'=>'0',
'type'=>5,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>1,
'size'=>0.0,
'export'=>'0',
'namekey'=>'1019qid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9468,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'uid1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>9469,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>1,
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'publish1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9470,
'name'=>'mgid',
'pkey'=>'0',
'checkval'=>1,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'mgid1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9471,
'name'=>'priority',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>100,
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'priority1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9472,
'name'=>'senddate',
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
'export'=>'0',
'namekey'=>'senddate1019',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10609,
'name'=>'cmpgnid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'cmpgnid1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10668,
'name'=>'lsid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>13,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'lsid1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9473,
'name'=>'attempt',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'attempt1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9474,
'name'=>'params',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>11,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'params1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10608,
'name'=>'type',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'type1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10610,
'name'=>'actid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'actid1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10661,
'name'=>'status',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>12,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'status1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11263,
'name'=>'mailerid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>14,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'mailerid1019',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>1019,
'ref_dbtid'=>374,
'name'=>'mgid',
'name2'=>'mgid',
'namekey'=>'FK_mailing_queue_mgid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#email#mailing_node' ),
array(
'dbtid'=>1019,
'ref_dbtid'=>3401,
'name'=>'cmpgnid',
'name2'=>'cmpgnid',
'namekey'=>'FK_mailing_queue_cmpgnid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#campaign#campaign_node' ),
array(
'dbtid'=>1019,
'ref_dbtid'=>1005,
'name'=>'mailerid',
'name2'=>'mailerid',
'namekey'=>'FK_mailing_queue_mailerid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#email#mailer_node' ),
array(
'dbtid'=>1019,
'ref_dbtid'=>3416,
'name'=>'actid',
'name2'=>'actid',
'namekey'=>'FK_mailing_queue_actid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#campaign#actions_node' ),
array(
'dbtid'=>1019,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_mailing_queue_uid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>4,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>1019,
'ref_dbtid'=>345,
'name'=>'lsid',
'name2'=>'lsid',
'namekey'=>'FK_mailing_queue_lsid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>5,
'ref_table'=>'#list#list_node' )
);

var $contraintsA=array(
array(
'ctid'=>66009,
'type'=>3,
'namekey'=>'PK_mailing_queue_qid' ),
array(
'ctid'=>66010,
'type'=>2,
'namekey'=>'IX_mailing_queue_publish_priority_senddate' ),
array(
'ctid'=>66205,
'type'=>2,
'namekey'=>'IX_mailing_queue_uid_cmpgnid_lsid' ),
array(
'ctid'=>66362,
'type'=>2,
'namekey'=>'IX_mailing_queue_mgid_cmpgnid_uid_lsid_publish' ),
array(
'ctid'=>66398,
'type'=>2,
'namekey'=>'IX_mailing_queue_mgid' )
);
}