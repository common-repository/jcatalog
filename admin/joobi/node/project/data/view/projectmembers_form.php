<?php defined('JOOBI_SECURE') or die('J....');
class Data_project_projectmembers_form_view extends WDataView{
var $yid=1005;
var $wid='#project.node';
var $type=51;
var $params='subtitle=1
autosave=1';
var $namekey='projectmembers_form';
var $menu=13;
var $dropdown=1;
var $sid='#project.members';
var $form=1;
var $icon='diagram';
var $rolid='#allusers';
var $alias='Assign a project';
var $useredit=1;
var $name='1215507791FLOP';
var $description='1470801877QGZE';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.ajaxinfo',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'notitle=1
spantit=1',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458348,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectmembers_form_info',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1215507792MTRQ',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#project.members',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=projecttype',
'ordering'=>2,
'map'=>'pjid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458282,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectmembers_form_project_members_pjid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964390BUEL',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#project.members',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>3,
'map'=>'uid',
'level'=>'0',
'initial'=>'ttt',
'hidden'=>'0',
'fid'=>458279,
'core'=>1,
'did'=>'#project#membersbackend_picklist',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectmembers_form_project_members_uid',
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
'type'=>'output.select',
'sid'=>'#project.members',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.basic',
'ordering'=>4,
'map'=>'role',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>458280,
'core'=>1,
'did'=>'#project#project_role',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'projectmembers_form_project_members_role',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1209142268NMKA',
'description'=>'' )
);

var $picklistA=array(
array(
'did'=>'#project#project_priority',
'ordering'=>'0' ),
array(
'did'=>'#project#project_role',
'ordering'=>'0' )
);
}