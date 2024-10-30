<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_clickyesno_table extends WDataTable{
var $name='ticket_clickyesno';
var $namekey='ticket.clickyesno';
var $dbtid=761;
var $rolid='#allusers';
var $type=1;
var $pkey='clickid';
var $suffix='clickyesno';
var $group='ticket';
var $domain=51;
var $export=2;
var $engine=7;
var $node='ticket';
var $columnsA=array(
array(
'dbcid'=>7271,
'name'=>'clickid',
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
'namekey'=>'761clickid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7272,
'name'=>'tkid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'tkid761',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7273,
'name'=>'ip',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'NULL',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>10.0,
'export'=>1,
'namekey'=>'ip761',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7274,
'name'=>'uid',
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
'namekey'=>'uid761',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>7275,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'created761',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7276,
'name'=>'yesno',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'yesno761',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>761,
'ref_dbtid'=>532,
'name'=>'tkid',
'name2'=>'tkid',
'namekey'=>'761_tkid_532',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#ticket#ticket_node' ),
array(
'dbtid'=>761,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'761_uid_232',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#users#members_node' )
);

var $contraintsA=array(
array(
'ctid'=>65694,
'type'=>3,
'namekey'=>'PK_ticket_clickyesno' )
);
}