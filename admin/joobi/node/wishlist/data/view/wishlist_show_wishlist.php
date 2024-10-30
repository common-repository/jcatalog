<?php defined('JOOBI_SECURE') or die('J....');
class Data_wishlist_wishlist_show_wishlist_view extends WDataView{
var $yid=501096;
var $wid='#wishlist.node';
var $type=151;
var $namekey='wishlist_show_wishlist';
var $menu=13;
var $level=50;
var $pagination=1;
var $sid='#wishlist';
var $form=1;
var $icon='list';
var $rolid='#storemanager';
var $alias='wishlist show';
var $name='1298350949JEOR';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#wishlisttrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>1,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456015,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlisttrans_name_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'' ),
array(
'type'=>'output.textarea',
'sid'=>'#wishlisttrans',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>2,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456018,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlisttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>3,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456001,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1398436917DTKC',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>4,
'map'=>'alias',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456002,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_alias',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1211811583DBTA',
'description'=>'' ),
array(
'type'=>'output.types',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=type
num=1
onlyread=1',
'ordering'=>5,
'map'=>'type',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456003,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_type',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVD',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>7,
'map'=>'private',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456005,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_private',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1219769905FKPR',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'rolid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456006,
'core'=>1,
'did'=>'#role#role_user_access',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEO',
'description'=>'' ),
array(
'type'=>'output.textonly',
'sid'=>'#users',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>10,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456008,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_users_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1236926427LMQA',
'description'=>'' ),
array(
'type'=>'main.core',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>11,
'map'=>'core',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456009,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_core',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGNE',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1',
'ordering'=>12,
'map'=>'publish',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456010,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_publish',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1 n dateformat=5',
'ordering'=>13,
'map'=>'created',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456011,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_created',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRY',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'uid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456014,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_users_uid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'modifiedby',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2456013,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_modifiedby',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#wishlist',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'onlyread=1 n dateformat=5',
'ordering'=>16,
'map'=>'modified',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456012,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'wishlist_show_wishlist_wishlist_modified',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRL',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>2,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>7435,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'wishlist_show_wishlist_edit',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
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
'mid'=>7436,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'wishlist_show_wishlist_cancel',
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