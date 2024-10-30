<?php defined('JOOBI_SECURE') or die('J....');
class Data_catalog_catalog_banner_widget_view extends WDataView{
var $yid=502297;
var $wid='#catalog.node';
var $type=51;
var $params='autosave=1';
var $namekey='catalog_banner_widget';
var $menu=13;
var $frontend=1;
var $sid='#main.widget';
var $form=1;
var $icon='link';
var $rolid='#manager';
var $alias='Catalog Banner widget preferences';
var $useredit=1;
var $name='1449596969PSRO';
var $description='1470801991ONZW';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=40',
'ordering'=>1,
'map'=>'p[banner]',
'level'=>'0',
'initial'=>'catalog/images/joobi-ecommerce-joomla.jpg',
'hidden'=>'0',
'fid'=>2470728,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_banner_widget_banner',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1304041344RPOQ',
'description'=>'1449596968KJLI' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.widget',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=5',
'ordering'=>2,
'map'=>'p[showrss]',
'level'=>'0',
'initial'=>150,
'hidden'=>'0',
'fid'=>2470729,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_banner_widget_showrss',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1449596968KJLH',
'description'=>'1449596936EBUB' )
);
}