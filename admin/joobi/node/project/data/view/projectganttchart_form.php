<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_projectganttchart_form_view extends WDataView{
var $yid=1287;
var $wid='#project.node';
var $type=51;
var $params='mtype=image
autosave=1';
var $namekey='projectganttchart_form';
var $menu=13;
var $sid='#project';
var $form=1;
var $icon='report';
var $rolid='#manager';
var $alias='Gantt Chart';
var $useredit=1;
var $name='1215507791FLOV';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>'#project',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=gantt
spantit=1',
'ordering'=>1,
'map'=>'pjid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>460128,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'projectganttchart_form_project_pjid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1215507791FLOV',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>2320,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'projectganttchart_form_cancel',
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