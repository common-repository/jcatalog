<?php defined('JOOBI_SECURE') or die('J....');
class Data_vendor_vendor_preferences_view extends WDataView{
var $yid=1645;
var $wid='#vendor.node';
var $type=61;
var $params='autosave=1
subtitle=1
cssfile=1';
var $namekey='vendor_preferences';
var $menu=13;
var $form=1;
var $rolid='#storemanager';
var $alias='vendor_preferences';
var $faicon='fa-cog';
var $name='1227581071SHQY';
var $description='1470801831BVDU';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463829,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'vendor_preferences_email',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRU',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463737,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'vendor_preferences_user',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_preferences_email',
'name'=>'1208359284QWNS',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'c[vendor.node][newvendoruser]',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>463740,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'vendor_preferences_vendor_node_newvendoruser',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_preferences_user',
'name'=>'1227581071SHQW',
'description'=>'1228709834IPPK' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463744,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'vendor_preferences_admin',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_preferences_email',
'name'=>'1206732425HINY',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'c[vendor.node][newvendoradmin]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463745,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'vendor_preferences_vendor_node_newvendoradmin',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_preferences_admin',
'name'=>'1227581071SHQW',
'description'=>'1228709834IPPL' )
);

var $menusA=array(
array(
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'done',
'action'=>'savepref',
'mid'=>3942,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'vendor_preferences_savepref',
'faicon'=>'fa-check',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIPC',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>3943,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'vendor_preferences_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' )
);
}