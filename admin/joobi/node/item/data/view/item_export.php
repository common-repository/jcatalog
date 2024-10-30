<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_export_view extends WDataView{
var $yid=501252;
var $wizard=1;
var $wid='#item.node';
var $type=51;
var $params='subtitle=1
autosave=1
mtype=image';
var $namekey='item_export';
var $menu=23;
var $frontend=1;
var $form=1;
var $icon='about';
var $rolid='#vendor';
var $alias='Export Items';
var $useredit=1;
var $name='1352160514SRAV';
var $description='';
var $wname='1206732405TIXB';
var $wdescription='1309235437JHLT';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=selectlanguage',
'ordering'=>1,
'map'=>'x[lgid]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2457983,
'core'=>1,
'did'=>'#translation#translation_language_exportable',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_export_lgid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282416HAQB',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=20px',
'ordering'=>2,
'map'=>'x[columns]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2457979,
'core'=>1,
'did'=>'#item#item_columns_export',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_export_columns',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1308727155NEOK',
'description'=>'1308727185GNWI' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'before',
'action'=>'exporttofile(producttype=controller)(noframe)',
'mid'=>8100,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'item_export_export',
'faicon'=>'fa-chevron-left',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732405TIXB',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8921,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'item_export_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);
}