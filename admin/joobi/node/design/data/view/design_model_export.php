<?php defined('JOOBI_SECURE') or die('J....');
class Data_design_design_model_export_view extends WDataView{
var $yid=502214;
var $wid='#design.node';
var $type=151;
var $params='viewarea=["bottom"]';
var $namekey='design_model_export';
var $menu=13;
var $filters=1;
var $sid='#design.model';
var $form=1;
var $icon='extension';
var $tmid=672;
var $rolid='#admin';
var $alias='XML Export';
var $faicon='fa-retweet';
var $name='1206732405TIXB';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.row',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469948,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'apps_show_row1_copy1442014948',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1394069593IQAQ',
'description'=>'' ),
array(
'type'=>'output.ajaxinfo',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469955,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_show_status_1_copy1442014948',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#apps_show_row1_copy1442014948',
'name'=>'1206732392OZVH',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'pageajax=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'archive',
'action'=>'doexport',
'mid'=>13822,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'design_model_export_export',
'faicon'=>'fa-arrow-circle-up',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732405TIXB',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'default',
'action'=>'cancel',
'mid'=>13832,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'design_model_export_cancel',
'faicon'=>'fa-arrow-left',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961882TDHA',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>'0',
'icon'=>'default',
'action'=>'divider',
'mid'=>13828,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'apps_show_divider_install_back_copy1442014948',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>13830,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'apps_show_help_copy1442014948',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#extension_show_enabled1_copy1442014948',
'bktbefore'=>'0',
'sid'=>'#apps.userinfos',
'map'=>'enabled',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'DESC',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'extension_show_enabled1_copy1442014948',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}