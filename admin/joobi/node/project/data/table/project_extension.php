<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_project_extension_table extends WDataTable{
var $name='project_extension';
var $namekey='project.extension';
var $dbtid=543;
var $rolid='#allusers';
var $type=30;
var $pkey='pjid,wid';
var $suffix='extension';
var $group='project';
var $domain=51;
var $export=2;
var $engine=7;
var $node='project';
var $columnsA=array(
array(
'dbcid'=>3725,
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
'namekey'=>'543pjid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3728,
'name'=>'wid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'543wid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>543,
'ref_dbtid'=>405,
'name'=>'pjid',
'name2'=>'pjid',
'namekey'=>'FK_project_extension_pjid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#project#project_node' ),
array(
'dbtid'=>543,
'ref_dbtid'=>5,
'name'=>'wid',
'name2'=>'wid',
'namekey'=>'FK_project_extension_wid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#apps#extension_node' )
);

var $contraintsA=array(
array(
'ctid'=>65458,
'type'=>3,
'namekey'=>'PK_project_extension_pjid_wid' )
);
}