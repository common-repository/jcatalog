<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_milestone_node_table extends WDataTable{
var $name='milestone_node';
var $namekey='milestone.node';
var $dbtid=609;
var $rolid='#allusers';
var $type=1;
var $pkey='mileid';
var $suffix='node';
var $group='milestone';
var $domain=51;
var $export=2;
var $engine=7;
var $node='project';
var $columnsA=array(
array(
'dbcid'=>5954,
'name'=>'mileid',
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
'namekey'=>'609mileid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5956,
'name'=>'deadline',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'609deadline',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5957,
'name'=>'startdate',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'609startdate',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6071,
'name'=>'alias',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>50.0,
'export'=>1,
'namekey'=>'609alias',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>615,
'ref_dbtid'=>609,
'name'=>'mileid',
'name2'=>'mileid',
'namekey'=>'FK_project.milestones_mileid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#project#project_milestones' ),
array(
'dbtid'=>523,
'ref_dbtid'=>609,
'name'=>'mileid',
'name2'=>'mileid',
'namekey'=>'FK_task_mileid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#project#task_node' ),
array(
'dbtid'=>610,
'ref_dbtid'=>609,
'name'=>'mileid',
'name2'=>'mileid',
'namekey'=>'FK_milestonetrans_mileid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#project#milestone_trans' )
);
}