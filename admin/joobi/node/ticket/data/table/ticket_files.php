<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_files_table extends WDataTable{
var $name='ticket_files';
var $namekey='ticket.files';
var $dbtid=582;
var $rolid='#allusers';
var $type=30;
var $pkey='tkid,filid';
var $suffix='files';
var $group='ticket';
var $domain=51;
var $export=2;
var $engine=7;
var $node='ticket';
var $columnsA=array(
array(
'dbcid'=>5646,
'name'=>'filid',
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
'namekey'=>'582filid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'fileID',
'fieldtype'=>'output.media' ),
array(
'dbcid'=>5647,
'name'=>'tkid',
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
'namekey'=>'582tkid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5648,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>3.0,
'export'=>1,
'namekey'=>'582ordering',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>582,
'ref_dbtid'=>532,
'name'=>'tkid',
'name2'=>'tkid',
'namekey'=>'FK_ticket_files_tkid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#ticket#ticket_node' ),
array(
'dbtid'=>582,
'ref_dbtid'=>478,
'name'=>'filid',
'name2'=>'filid',
'namekey'=>'FK_ticket_files_filid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#files#file_node' )
);

var $contraintsA=array(
array(
'ctid'=>65476,
'type'=>3,
'namekey'=>'PK_ticket_files_filid_tkid' )
);
}