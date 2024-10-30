<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_trans_table extends WDataTable{
var $name='ticket_trans';
var $namekey='ticket.trans';
var $dbtid=533;
var $rolid='#allusers';
var $type=20;
var $pkey='tkid,lgid';
var $suffix='trans';
var $group='ticket';
var $domain=51;
var $export=2;
var $engine=5;
var $node='ticket';
var $columnsA=array(
array(
'dbcid'=>3652,
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
'namekey'=>'533description',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3653,
'name'=>'lgid',
'pkey'=>1,
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>4.0,
'export'=>1,
'namekey'=>'533lgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3654,
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
'size'=>250.0,
'export'=>1,
'namekey'=>'533name',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3655,
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
'namekey'=>'533tkid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6850,
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
'namekey'=>'auto533',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6851,
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
'namekey'=>'fromlgid533',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>533,
'ref_dbtid'=>532,
'name'=>'tkid',
'name2'=>'tkid',
'namekey'=>'FK_tickettrans_tkid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#ticket#ticket_node' ),
array(
'dbtid'=>533,
'ref_dbtid'=>199,
'name'=>'lgid',
'name2'=>'lgid',
'namekey'=>'FK_tickettrans_lgid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#library#language_node' )
);

var $contraintsA=array(
array(
'ctid'=>65452,
'type'=>3,
'namekey'=>'PK_tickettrans_tkid_lgid' ),
array(
'ctid'=>66046,
'type'=>5,
'namekey'=>'FX_ticket_trans_name' ),
array(
'ctid'=>66047,
'type'=>5,
'namekey'=>'FX_ticket_trans_description' )
);

var $contraintsItemsA=array(
array(
'ctid'=>66046,
'dbcid'=>3654,
'ordering'=>1 ),
array(
'ctid'=>66047,
'dbcid'=>3652,
'ordering'=>1 )
);
}