<?php defined('JOOBI_SECURE') or die('J....');
class Data_design_model_fields_table extends WDataTable{
var $name='model_fields';
var $namekey='model.fields';
var $dbtid=994;
var $rolid='#allusers';
var $type=1;
var $pkey='fdid';
var $domain=9;
var $export=2;
var $noaudit=1;
var $engine=7;
var $node='design';
var $columnsA=array(
array(
'dbcid'=>9055,
'name'=>'fdid',
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
'namekey'=>'994fdid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9056,
'name'=>'namekey',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>5,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>150.0,
'export'=>1,
'namekey'=>'namekey994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>9058,
'name'=>'rolid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'rolid994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9061,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9084,
'name'=>'sid',
'pkey'=>'0',
'checkval'=>1,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>11,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'sid994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9057,
'name'=>'fieldid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'type994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9059,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>'0',
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
'namekey'=>'uid994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>9060,
'name'=>'core',
'pkey'=>'0',
'checkval'=>'0',
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'core994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9062,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'created994',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9063,
'name'=>'modified',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>8,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'modified994',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9100,
'name'=>'searchable',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>12,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'searchable994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9101,
'name'=>'rolid_edit',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>15,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'rolid_edit994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9102,
'name'=>'params',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>17,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'params994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9109,
'name'=>'initialvalue',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>16,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'initialvalue994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9111,
'name'=>'column',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>100.0,
'export'=>1,
'namekey'=>'column994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9112,
'name'=>'required',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>14,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'required994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9129,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>999,
'ordering'=>18,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ordering994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9147,
'name'=>'updateall',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>19,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'updateall994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9158,
'name'=>'dbcid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>20,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'dbcid994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9290,
'name'=>'translate',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>21,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'translate994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10034,
'name'=>'advsearchable',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>13,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'advsearchable994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10972,
'name'=>'sorting',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>22,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'sorting994',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>994,
'ref_dbtid'=>621,
'name'=>'sid',
'name2'=>'sid',
'namekey'=>'FK_model_fields_sid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#library#model_node' ),
array(
'dbtid'=>998,
'ref_dbtid'=>994,
'name'=>'fdid',
'name2'=>'fdid',
'namekey'=>'FK_model_fieldstrans_fdid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#design#model_fieldstrans' ),
array(
'dbtid'=>1008,
'ref_dbtid'=>994,
'name'=>'fdid',
'name2'=>'fdid',
'namekey'=>'FK_model_fields_type_fdid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#design#model_fields_type' ),
array(
'dbtid'=>999,
'ref_dbtid'=>994,
'name'=>'fdid',
'name2'=>'fdid',
'namekey'=>'FK_layout_fields_fdid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#design#layout_fields' ),
array(
'dbtid'=>994,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_model_fields_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>994,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_model_fields_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>3,
'ref_table'=>'#role#role_node' ),
array(
'dbtid'=>994,
'ref_dbtid'=>995,
'name'=>'fieldid',
'name2'=>'fieldid',
'namekey'=>'FK_model_fields_fieldid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>4,
'ref_table'=>'#design#fields_node' ),
array(
'dbtid'=>3,
'ref_dbtid'=>994,
'name'=>'fdid',
'name2'=>'fdid',
'namekey'=>'FK_layout_listings_fdid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>6,
'ref_table'=>'#library#layout_listings' ),
array(
'dbtid'=>1,
'ref_dbtid'=>994,
'name'=>'fdid',
'name2'=>'fdid',
'namekey'=>'FK_layout_forms_fdid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>7,
'ref_table'=>'#library#layout_multiforms' )
);

var $contraintsA=array(
array(
'ctid'=>65971,
'type'=>3,
'namekey'=>'PK_model_fields_fdid' ),
array(
'ctid'=>65972,
'type'=>1,
'namekey'=>'UK_namekey_model_fields' ),
array(
'ctid'=>66269,
'type'=>2,
'namekey'=>'IX_model_fields_publish_rolid' ),
array(
'ctid'=>66311,
'type'=>2,
'namekey'=>'IX_model_fields_sid' )
);

var $contraintsItemsA=array(
array(
'ctid'=>65972,
'dbcid'=>9056,
'ordering'=>5 )
);
}