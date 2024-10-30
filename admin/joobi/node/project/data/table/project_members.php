<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_project_members_table extends WDataTable{
var $name='project_members';
var $namekey='project.members';
var $dbtid=526;
var $rolid='#allusers';
var $type=30;
var $pkey='pjid,uid';
var $suffix='members';
var $group='project';
var $domain=51;
var $export=2;
var $engine=7;
var $node='project';
var $columnsA=array(
array(
'dbcid'=>3602,
'name'=>'pjid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'526pjid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3606,
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
'namekey'=>'526uid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>3604,
'name'=>'role',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'526role',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6484,
'name'=>'supportlevel',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'supportlevel526',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7393,
'name'=>'notify',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'notify526',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>526,
'ref_dbtid'=>405,
'name'=>'pjid',
'name2'=>'pjid',
'namekey'=>'FK_projectmembers_pjid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#project#project_node' ),
array(
'dbtid'=>526,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_projectmembers_uid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>532,
'ref_dbtid'=>526,
'name'=>'pjid',
'name2'=>'pjid',
'namekey'=>'FK_ticket_pjid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>7,
'ref_table'=>'#ticket#ticket_node' ),
array(
'dbtid'=>532,
'ref_dbtid'=>526,
'name'=>'authoruid',
'name2'=>'uid',
'namekey'=>'FK_ticket_authoruid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>8,
'ref_table'=>'#ticket#ticket_node' )
);

var $contraintsA=array(
array(
'ctid'=>65451,
'type'=>3,
'namekey'=>'PK_project_members_pjid_uid' )
);
}