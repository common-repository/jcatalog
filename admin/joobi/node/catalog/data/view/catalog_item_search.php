<?php defined('JOOBI_SECURE') or die('J....');
class Data_catalog_catalog_item_search_view extends WDataView{
var $yid=500752;
var $wizard=1;
var $wid='#catalog.node';
var $type=51;
var $params='pagetitle=3
autofocus=1
autosave=1
subtitle=1
htmlfile=1
cssfile=1
phpfile=1
viewarea=["button","searchbox","searchcategory","searchlocation","searchtype","searchvendor","searchzip","searchzipcountry"]';
var $namekey='catalog_item_search';
var $frontend=1;
var $subtype=17;
var $sid='#item';
var $form=1;
var $icon='diagram';
var $rolid='#allusers';
var $alias='Item Search Box in Catalog Home or module';
var $useredit=1;
var $name='1340148835KAVE';
var $description='1470801991ONZS';
var $wname='1257243215EFTS';
var $wdescription='1397876875IFBX';
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
'params'=>'filef=homesearch
notitle=1
spantit=1
classes=inputbox search-inputbox',
'ordering'=>1,
'map'=>'x[search]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>466566,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'searchbox',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_searchprod',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732365OQJI',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1',
'ordering'=>2,
'map'=>'x[catid]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459726,
'core'=>1,
'did'=>'#catalog#catalog_item_category_search',
'private'=>'0',
'area'=>'searchcategory',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_searchcatid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGQQ',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1',
'ordering'=>3,
'map'=>'x[prodtypid]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459727,
'core'=>1,
'did'=>'#catalog#catalog_item_type_search',
'private'=>'0',
'area'=>'searchtype',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_searchtype',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1220793707SOED',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1',
'ordering'=>4,
'map'=>'x[vendid]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459725,
'core'=>1,
'did'=>'#vendor#vendor_list_publish_catalog_home_search',
'private'=>'0',
'area'=>'searchvendor',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_searchvendid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1220793715LTKS',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=searchlocation
notitle=1
spantit=1',
'ordering'=>5,
'map'=>'x[radius]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2462939,
'core'=>1,
'did'=>'#catalog#catalog_radius_search',
'private'=>'0',
'area'=>'searchlocation',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_searchlocation',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732421RJQC',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=zipsearch
spantit=1
classes=zipCode',
'ordering'=>6,
'map'=>'x[zipcode]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465704,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'searchzip',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_searchzipcode',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESOX',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1',
'ordering'=>7,
'map'=>'x[country]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465705,
'core'=>1,
'did'=>'#countries#countries_published_list_wdefault',
'private'=>'0',
'area'=>'searchzipcountry',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_searchzipcodecountry',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961922ESPA',
'description'=>'' ),
array(
'type'=>'main.submit',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
faicon=fa-search
color=primary
align=right',
'ordering'=>8,
'map'=>'x[query|catalog-results]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>466568,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'button',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'catalog_item_search_x_search',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1257243215EFTP',
'description'=>'' )
);
}