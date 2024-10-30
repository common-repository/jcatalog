<?php defined('JOOBI_SECURE') or die('J....');
class Data_countries_country_states_table extends WDataTable{
var $name='country_states';
var $namekey='country.states';
var $dbtid=882;
var $rolid='#allusers';
var $type=1;
var $pkey='stateid';
var $suffix='states';
var $group='country';
var $domain=51;
var $export=2;
var $engine=7;
var $node='countries';
var $columnsA=array(
array(
'dbcid'=>8026,
'name'=>'stateid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>'0',
'rolid'=>'0',
'extra'=>1,
'size'=>5.0,
'export'=>1,
'namekey'=>'882stateid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8030,
'name'=>'code3',
'pkey'=>'0',
'checkval'=>1,
'type'=>15,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>3.0,
'export'=>1,
'namekey'=>'code3882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8032,
'name'=>'ctyid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>5.0,
'export'=>1,
'namekey'=>'ctyid882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8027,
'name'=>'name',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>64.0,
'export'=>1,
'namekey'=>'name882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8028,
'name'=>'namekey',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>64.0,
'export'=>1,
'namekey'=>'namekey882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>8029,
'name'=>'code2',
'pkey'=>'0',
'checkval'=>1,
'type'=>15,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>2.0,
'export'=>1,
'namekey'=>'code2882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8031,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8760,
'name'=>'core',
'pkey'=>'0',
'checkval'=>1,
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'core882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8923,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering882',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>323,
'ref_dbtid'=>882,
'name'=>'stateid',
'name2'=>'stateid',
'namekey'=>'FK_address_node_stateid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#address#address_node' ),
array(
'dbtid'=>313,
'ref_dbtid'=>882,
'name'=>'stateid',
'name2'=>'stateid',
'namekey'=>'FK_zones.countries_stateid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#zones#zones_countries' ),
array(
'dbtid'=>882,
'ref_dbtid'=>200,
'name'=>'ctyid',
'name2'=>'ctyid',
'namekey'=>'882_ctyid_200',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>99,
'ref_table'=>'#countries#country_node' )
);

var $contraintsA=array(
array(
'ctid'=>65793,
'type'=>3,
'namekey'=>'PK_joobi_states' ),
array(
'ctid'=>65936,
'type'=>1,
'namekey'=>'UK_code3_ctryid' )
);

var $contraintsItemsA=array(
array(
'ctid'=>65936,
'dbcid'=>8030,
'ordering'=>1 ),
array(
'ctid'=>65936,
'dbcid'=>8032,
'ordering'=>1 )
);
}