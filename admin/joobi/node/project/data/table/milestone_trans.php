<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_milestone_trans_table extends WDataTable{
var $name='milestone_trans';
var $namekey='milestone.trans';
var $dbtid=610;
var $rolid='#allusers';
var $type=20;
var $pkey='mileid,lgid';
var $suffix='trans';
var $group='milestone';
var $domain=51;
var $export=2;
var $engine=7;
var $node='project';
var $columnsA=array(
array(
'dbcid'=>5958,
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
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'610mileid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5960,
'name'=>'lgid',
'pkey'=>1,
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>4.0,
'export'=>1,
'namekey'=>'610lgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5959,
'name'=>'name',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>20.0,
'export'=>1,
'namekey'=>'610name',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5961,
'name'=>'description',
'pkey'=>'0',
'checkval'=>'0',
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'610description',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6876,
'name'=>'auto',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>2,
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'auto610',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6877,
'name'=>'fromlgid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'fromlgid610',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>610,
'ref_dbtid'=>199,
'name'=>'lgid',
'name2'=>'lgid',
'namekey'=>'FK_milestonetrans_lgid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#library#language_node' ),
array(
'dbtid'=>610,
'ref_dbtid'=>609,
'name'=>'mileid',
'name2'=>'mileid',
'namekey'=>'FK_milestonetrans_mileid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#project#milestone_node' )
);

var $contraintsA=array(
array(
'ctid'=>65486,
'type'=>3,
'namekey'=>'PK_milestonetrans_mileid_lgid' )
);
}