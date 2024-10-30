<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_rating_table extends WDataTable{
var $name='ticket_rating';
var $namekey='ticket.rating';
var $dbtid=758;
var $rolid='#allusers';
var $type=1;
var $pkey='trid';
var $suffix='rating';
var $group='ticket';
var $domain=51;
var $export=2;
var $engine=7;
var $node='ticket';
var $columnsA=array(
array(
'dbcid'=>7222,
'name'=>'trid',
'pkey'=>1,
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'758trid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7223,
'name'=>'tkrid',
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
'export'=>1,
'namekey'=>'tkrid758',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7224,
'name'=>'rate',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'rate758',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7225,
'name'=>'supportuid',
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
'export'=>1,
'namekey'=>'supportuid758',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7226,
'name'=>'pjid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'pjid758',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7227,
'name'=>'modified',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'modified758',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>758,
'ref_dbtid'=>534,
'name'=>'tkrid',
'name2'=>'tkrid',
'namekey'=>'758_tkrid_534',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#ticket#ticket_reply' ),
array(
'dbtid'=>758,
'ref_dbtid'=>531,
'name'=>'pjid',
'name2'=>'pjid',
'namekey'=>'758_pjid_531',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#ticket#ticket_project' ),
array(
'dbtid'=>758,
'ref_dbtid'=>232,
'name'=>'supportuid',
'name2'=>'uid',
'namekey'=>'FK_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>3,
'ref_table'=>'#users#members_node' )
);

var $contraintsA=array(
array(
'ctid'=>65691,
'type'=>3,
'namekey'=>'PK_ticket_rating' )
);
}