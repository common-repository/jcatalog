<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_reply_files_table extends WDataTable{
var $name='ticket_reply_files';
var $namekey='ticket.reply.files';
var $dbtid=676;
var $rolid='#allusers';
var $type=30;
var $pkey='tkrid,filid';
var $suffix='reply_files';
var $group='ticket';
var $domain=51;
var $export=2;
var $engine=7;
var $node='ticket';
var $columnsA=array(
array(
'dbcid'=>6548,
'name'=>'tkrid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'676tkrid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6549,
'name'=>'filid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'676filid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'fileID',
'fieldtype'=>'output.media' ),
array(
'dbcid'=>6550,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
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
'namekey'=>'ordering676',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>676,
'ref_dbtid'=>534,
'name'=>'tkrid',
'name2'=>'tkrid',
'namekey'=>'FK_ticket_reply_files_tkrid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#ticket#ticket_reply' ),
array(
'dbtid'=>676,
'ref_dbtid'=>478,
'name'=>'filid',
'name2'=>'filid',
'namekey'=>'FK_ticket_reply_files_filid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#files#file_node' )
);

var $contraintsA=array(
array(
'ctid'=>65590,
'type'=>3,
'namekey'=>'PK_ticket_reply_files' )
);
}