<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_productcat_node_table extends WDataTable{
var $name='productcat_node';
var $namekey='productcat.node';
var $dbtid=310;
var $rolid='#allusers';
var $type=40;
var $pkey='catid';
var $suffix='node';
var $group='productcat';
var $domain=51;
var $export=2;
var $engine=7;
var $node='item';
var $columnsA=array(
array(
'dbcid'=>1742,
'name'=>'rolid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>8,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310rolid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1751,
'name'=>'namekey',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>3,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>100.0,
'export'=>1,
'namekey'=>'310namekey',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'uniqueID',
'fieldtype'=>'' ),
array(
'dbcid'=>1752,
'name'=>'ordering',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>10,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310ordering',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1754,
'name'=>'parent',
'pkey'=>'0',
'checkval'=>1,
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>7,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310parent',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1755,
'name'=>'publish',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>9,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310publish',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8504,
'name'=>'publishstart',
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
'namekey'=>'publishstart310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'output.datetime' ),
array(
'dbcid'=>8505,
'name'=>'publishend',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>21,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'publishend310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'output.datetime' ),
array(
'dbcid'=>8568,
'name'=>'prodtypid',
'pkey'=>'0',
'checkval'=>1,
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>23,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'prodtypid310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1743,
'name'=>'alias',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>4,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>150.0,
'export'=>1,
'namekey'=>'310alias',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1744,
'name'=>'author',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>14,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310author',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1745,
'name'=>'catid',
'pkey'=>1,
'checkval'=>'0',
'type'=>2,
'attributes'=>1,
'mandatory'=>1,
'default'=>'',
'ordering'=>1,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'310catid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'categoryID',
'fieldtype'=>'' ),
array(
'dbcid'=>1747,
'name'=>'created',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>13,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>1,
'size'=>0.0,
'export'=>1,
'namekey'=>'310created',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1748,
'name'=>'filid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>2,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310filid',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'fileID',
'fieldtype'=>'output.media' ),
array(
'dbcid'=>1749,
'name'=>'lft',
'pkey'=>'0',
'checkval'=>'0',
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>5,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310lft',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1750,
'name'=>'modified',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>12,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310modified',
'core'=>1,
'columntype'=>1,
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1753,
'name'=>'params',
'pkey'=>'0',
'checkval'=>1,
'type'=>16,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>19,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310params',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1756,
'name'=>'rgt',
'pkey'=>'0',
'checkval'=>'0',
'type'=>3,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>6,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310rgt',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>1757,
'name'=>'type',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>11,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310type',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>5862,
'name'=>'depth',
'pkey'=>'0',
'checkval'=>'0',
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>15,
'level'=>1,
'rolid'=>'#allusers',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'310depth',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>6740,
'name'=>'numpid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>16,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'numpid310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>7228,
'name'=>'vendid',
'pkey'=>'0',
'checkval'=>'0',
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>17,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'vendid310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'vendorID',
'fieldtype'=>'' ),
array(
'dbcid'=>7262,
'name'=>'uid',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>18,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'uid310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'userID',
'fieldtype'=>'' ),
array(
'dbcid'=>8506,
'name'=>'cssclass',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>22,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>100.0,
'export'=>1,
'namekey'=>'cssclass310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8569,
'name'=>'layout',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>1,
'ordering'=>24,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>3.0,
'export'=>1,
'namekey'=>'layout310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8585,
'name'=>'blocked',
'pkey'=>'0',
'checkval'=>1,
'type'=>1,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>25,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'block310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8845,
'name'=>'hits',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>26,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'hits310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>8846,
'name'=>'featured',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>27,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'featured310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10906,
'name'=>'site_id',
'pkey'=>'0',
'checkval'=>1,
'type'=>14,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'',
'ordering'=>28,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>255.0,
'export'=>1,
'namekey'=>'site_id310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>10957,
'name'=>'numpidsub',
'pkey'=>'0',
'checkval'=>1,
'type'=>4,
'attributes'=>1,
'mandatory'=>1,
'default'=>'0',
'ordering'=>29,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'numpidsub310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' ),
array(
'dbcid'=>11027,
'name'=>'restrictcategory',
'pkey'=>'0',
'checkval'=>1,
'type'=>25,
'attributes'=>'0',
'mandatory'=>1,
'default'=>'0',
'ordering'=>30,
'level'=>'0',
'rolid'=>'0',
'extra'=>'0',
'size'=>0.0,
'export'=>1,
'namekey'=>'allowvendor310',
'core'=>1,
'columntype'=>'0',
'noaudit'=>'0',
'readable'=>'',
'fieldtype'=>'' )
);

var $foreignsA=array(
array(
'dbtid'=>3472,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_productcat_type_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#productcat_type' ),
array(
'dbtid'=>310,
'ref_dbtid'=>566,
'name'=>'rolid',
'name2'=>'rolid',
'namekey'=>'FK_product_category_rolid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>1,
'ref_table'=>'#role#role_node' ),
array(
'dbtid'=>720,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_affiliate.discountcategory_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#affiliate#affiliate_discount_category' ),
array(
'dbtid'=>3447,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_productcat_category_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>1,
'ref_table'=>'#item#productcat_category' ),
array(
'dbtid'=>310,
'ref_dbtid'=>478,
'name'=>'filid',
'name2'=>'filid',
'namekey'=>'FK_productcat_node_filid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>2,
'ref_table'=>'#files#file_node' ),
array(
'dbtid'=>318,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_coupons_productcat_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>2,
'ref_table'=>'#coupons#coupons_productcat' ),
array(
'dbtid'=>310,
'ref_dbtid'=>310,
'name'=>'parent',
'name2'=>'catid',
'namekey'=>'FK_Parent310_parentcatid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>3,
'ref_table'=>'#item#productcat_node' ),
array(
'dbtid'=>310,
'ref_dbtid'=>232,
'name'=>'uid',
'name2'=>'uid',
'namekey'=>'FK_embers_node_uid_232',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>4,
'ref_table'=>'#users#members_node' ),
array(
'dbtid'=>314,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_product_type_catid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>5,
'ref_table'=>'#item#product_type' ),
array(
'dbtid'=>310,
'ref_dbtid'=>314,
'name'=>'prodtypid',
'name2'=>'prodtypid',
'namekey'=>'FK_productcat_node_prodtypid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>5,
'ref_table'=>'#item#product_type' ),
array(
'dbtid'=>310,
'ref_dbtid'=>652,
'name'=>'vendid',
'name2'=>'vendid',
'namekey'=>'FK_productcat_node_vendid',
'onupdate'=>1,
'ondelete'=>1,
'ordering'=>6,
'ref_table'=>'#vendor#vendor_node' ),
array(
'dbtid'=>335,
'ref_dbtid'=>310,
'name'=>'catid',
'name2'=>'catid',
'namekey'=>'FK_productcat_trans_catid',
'onupdate'=>3,
'ondelete'=>3,
'ordering'=>99,
'ref_table'=>'#item#productcat_trans' )
);

var $contraintsA=array(
array(
'ctid'=>1040,
'type'=>1,
'namekey'=>'UK_productcat_node_namekey' ),
array(
'ctid'=>66276,
'type'=>2,
'namekey'=>'IX_productcat_node_ordering' ),
array(
'ctid'=>66282,
'type'=>2,
'namekey'=>'IX_productcat_node_parent' ),
array(
'ctid'=>66306,
'type'=>2,
'namekey'=>'IX_productcat_node_publish_rolid' ),
array(
'ctid'=>66313,
'type'=>2,
'namekey'=>'IX_productcat_node_publishstart_publishend' ),
array(
'ctid'=>66371,
'type'=>2,
'namekey'=>'IX_productcat_node_prodtypid' )
);

var $contraintsItemsA=array(
array(
'ctid'=>1040,
'dbcid'=>1751,
'ordering'=>'0' )
);
}