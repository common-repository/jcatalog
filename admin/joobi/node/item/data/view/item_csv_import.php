<?php defined('JOOBI_SECURE') or die('J....');
class Data_item_item_csv_import_view extends WDataView{
var $yid=501250;
var $wizard=1;
var $wid='#item.node';
var $type=51;
var $params='subtitle=1
autosave=1
mtype=image';
var $namekey='item_csv_import';
var $menu=13;
var $frontend=1;
var $form=1;
var $icon='about';
var $rolid='#vendor';
var $alias='Items CSV Import';
var $name='1206732405TIXA';
var $description='';
var $wname='1206732405TIXA';
var $wdescription='1398536334FJGK';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=70px',
'ordering'=>1,
'map'=>'x[allowupdate]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459741,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_csv_import_allowupdate',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1340235804PUCE',
'description'=>'1398536329FXPK' ),
array(
'type'=>'output.file',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'x[importfile]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2457968,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'product_csv_import_import_file',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1308652552NGZE',
'description'=>'1409690289LNLE' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=70px',
'ordering'=>3,
'map'=>'x[imagefilepath]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2457969,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'product_csv_import_imagefilepath',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1308652552NGZF',
'description'=>'1340235807RKZO' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=70px',
'ordering'=>4,
'map'=>'x[downloadfilepath]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2457970,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'product_csv_import_downloadfilepath',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1308652552NGZG',
'description'=>'1308652585NFRQ' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=70px',
'ordering'=>5,
'map'=>'x[previewfilepath]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2457971,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'product_csv_import_previewfilepath',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1308652552NGZH',
'description'=>'1308652585NFRR' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'after',
'action'=>'csvimport(producttype=producttype)',
'mid'=>8070,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'product_csv_import_import',
'faicon'=>'fa-arrow-down',
'color'=>'success',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732405TIXA',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'filter',
'action'=>'virtuemartimport',
'mid'=>8368,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#storemanager',
'namekey'=>'product_csv_import_virtuemartimport',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1311740329LODP',
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
'mid'=>8919,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'product_csv_import_help',
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