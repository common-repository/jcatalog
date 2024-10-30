<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_replytrans_table extends WDataTable{
var $name='ticket_replytrans';
var $namekey='ticket.replytrans';
var $dbtid=535;
var $rolid='#allusers';
var $type=20;
var $pkey='tkrid,lgid';
var $suffix='replytrans';
var $group='ticket';
var $domain=51;
var $export=2;
var $engine=5;
var $node='ticket';
var $columnsA=array(
array(
'dbcid'=>3660,
'name'=>'description',
'pkey'=>'0',
'checkval'=>'0',
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'535description',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3661,
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
'namekey'=>'535lgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>3662,
'name'=>'tkrid',
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
'namekey'=>'535tkrid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6852,
'name'=>'auto',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>2,
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'auto535',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6853,
'name'=>'fromlgid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'fromlgid535',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>535,
'ref_dbtid'=>534,
'name'=>'tkrid',
'name2'=>'tkrid',
'namekey'=>'FK_ticket_replytrans_tkrid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#ticket#ticket_reply' ),
array(
'dbtid'=>535,
'ref_dbtid'=>199,
'name'=>'lgid',
'name2'=>'lgid',
'namekey'=>'FK_ticket_replytrans_lgid',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#library#language_node' )
);

var $contraintsA=array(
array(
'ctid'=>65453,
'type'=>3,
'namekey'=>'PK_ticket_replytrans_tkrid_lgid' ),
array(
'ctid'=>66048,
'type'=>5,
'namekey'=>'FX_ticket_replytrans_name' )
);

var $contraintsItemsA=array(
array(
'ctid'=>66048,
'dbcid'=>3660,
'ordering'=>1 )
);
}