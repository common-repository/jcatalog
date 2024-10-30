<?php defined('JOOBI_SECURE') or die('J....');
class Data_library_widgets_node_table extends WDataTable{
var $name='widgets_node';
var $namekey='widgets.node';
var $dbtid=1014;
var $rolid='#allusers';
var $type=1;
var $pkey='widgetid';
var $domain=51;
var $export=2;
var $engine=7;
var $node='library';
var $columnsA=array(
array(
'dbcid'=>9385,
'name'=>'widgetid',
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
'namekey'=>'1014widgetid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9386,
'name'=>'namekey',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>6,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>150.0,
'export'=>1,
'namekey'=>'namekey1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>9389,
'name'=>'rolid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>4,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'rolid1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9392,
'name'=>'core',
'pkey'=>'0',
'checkval'=>1,
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'core1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9393,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>12,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publish1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9396,
'name'=>'framework_type',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>13,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'ref_type1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9397,
'name'=>'framework_id',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>14,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'red_id1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9387,
'name'=>'alias',
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
'namekey'=>'alias1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9390,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>7,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'uid1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>9391,
'name'=>'modifiedby',
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
'export'=>'0',
'namekey'=>'modifiedby1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9394,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>11,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>'0',
'namekey'=>'created1014',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9395,
'name'=>'modified',
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
'export'=>'0',
'namekey'=>'modified1014',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9398,
'name'=>'catid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>15,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'catid1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'categoryID',
'fieldtype'=>'' ),
array(
'dbcid'=>9399,
'name'=>'params',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>16,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'params1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9406,
'name'=>'wid',
'pkey'=>'0',
'checkval'=>1,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>3,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'wid1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>9597,
'name'=>'wgtypeid',
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
'namekey'=>'wgtypeid1014',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>1014,
'ref_dbtid'=>5,
'name'=>'wid',
'name2'=>'wid',
'namekey'=>'FK_widgets_node_wid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#apps#extension_node' ),
array(
'dbtid'=>1015,
'ref_dbtid'=>1014,
'name'=>'widgetid',
'name2'=>'widgetid',
'namekey'=>'FK_widget_node_widgetid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#library#widgets_trans' ),
array(
'dbtid'=>1014,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_widgets_node_uid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>1014,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_widgets_node_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>3,
'ref_table'=>'#role#role_node' ),
array(
'dbtid'=>1014,
'ref_dbtid'=>1030,
'name'=>'wgtypeid',
'name2'=>'wgtypeid',
'namekey'=>'FK_widgets_node_wgtypeid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>4,
'ref_table'=>'#install#widgets_type' )
);

var $contraintsA=array(
array(
'ctid'=>65996,
'type'=>3,
'namekey'=>'PK_widgets_node' ),
array(
'ctid'=>65997,
'type'=>1,
'namekey'=>'UK_widgets_node_namekey' ),
array(
'ctid'=>66033,
'type'=>2,
'namekey'=>'IX_widgets_node_framework_type_publish_core' ),
array(
'ctid'=>66369,
'type'=>2,
'namekey'=>'IX_widgets_node_framework_id_rolid' )
);

var $contraintsItemsA=array(
array(
'ctid'=>65997,
'dbcid'=>9386,
'ordering'=>5 )
);
}