<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_project_milestones_table extends WDataTable{
var $name='project_milestones';
var $namekey='project.milestones';
var $dbtid=615;
var $rolid='#allusers';
var $type=30;
var $pkey='pjid,mileid';
var $suffix='milestones';
var $group='project';
var $domain=51;
var $export=2;
var $engine=7;
var $node='project';
var $columnsA=array(
array(
'dbcid'=>5997,
'name'=>'pjid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'615pjid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5998,
'name'=>'mileid',
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
'namekey'=>'615mileid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>615,
'ref_dbtid'=>405,
'name'=>'pjid',
'name2'=>'pjid',
'namekey'=>'FK_project.milestones_pjid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#project#project_node' ),
array(
'dbtid'=>615,
'ref_dbtid'=>609,
'name'=>'mileid',
'name2'=>'mileid',
'namekey'=>'FK_project.milestones_mileid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#project#milestone_node' )
);

var $contraintsA=array(
array(
'ctid'=>65489,
'type'=>3,
'namekey'=>'PK_project_milestones_pjid_mileid' )
);
}