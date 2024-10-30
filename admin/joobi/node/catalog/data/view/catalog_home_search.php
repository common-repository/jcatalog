<?php defined('JOOBI_SECURE') or die('J....');
class Data_catalog_catalog_home_search_view extends WDataView{
var $yid=501523;
var $wid='#catalog.node';
var $type=151;
var $params='pagetitle=1
subtitle=1
phpfile=1
htmlfile=1
cssfile=1
viewarea=["results","search"]';
var $namekey='catalog_home_search';
var $frontend=1;
var $subtype=17;
var $sid='#item';
var $form=1;
var $icon='about';
var $rolid='#allusers';
var $alias='Catalog Search Results';
var $useredit=1;
var $name='1373216618BXTU';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1
nestedview=catalog_item_search',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462943,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'search',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_home_search_search',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1304253972QWCK',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=search_results
nestedview=catalog_home_items',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462941,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'results',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_home_search_items',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1233642085PNTA',
'description'=>'' )
);
}