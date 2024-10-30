<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_terms_trans_table extends WDataTable{
var $name='item_terms_trans';
var $namekey='item.terms.trans';
var $dbtid=977;
var $rolid='#allusers';
var $type=20;
var $pkey='termid,lgid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>8802,
'name'=>'termid',
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
'namekey'=>'977termid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8803,
'name'=>'lgid',
'pkey'=>1,
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>4.0,
'export'=>1,
'namekey'=>'977lgid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8804,
'name'=>'name',
'pkey'=>'0',
'checkval'=>'0',
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'name977',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8805,
'name'=>'description',
'pkey'=>'0',
'checkval'=>'0',
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'description977',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8806,
'name'=>'auto',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>1,
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'auto977',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8807,
'name'=>'fromlgid',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'fromlgid977',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>977,
'ref_dbtid'=>976,
'name'=>'termid',
'name2'=>'termid',
'namekey'=>'termid_terms_termstrans',
'onupdate'=>1,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#item_terms' )
);

var $contraintsA=array(
array(
'ctid'=>65938,
'type'=>3,
'namekey'=>'PK_item_terms_trans' )
);
}