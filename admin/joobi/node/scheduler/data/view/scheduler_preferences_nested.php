<?php defined('JOOBI_SECURE') or die('J....');
class Data_scheduler_scheduler_preferences_nested_view extends WDataView{
var $yid=501782;
var $wid='#scheduler.node';
var $type=51;
var $params='autosave=1
subtitle=1
mtype=image
graphtype=';
var $namekey='scheduler_preferences_nested';
var $menu=13;
var $form=1;
var $rolid='#manager';
var $alias='Scheduler Preferences';
var $name='1206961898PINZ';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=servertime
formatdate=9',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>5,
'hidden'=>'0',
'fid'=>2464636,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_form_library_node_server_time',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1436410864OYRA',
'description'=>'1436410865NXKH' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=serververifiedtime
formatdate=9',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2464638,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_form_library_node_verified_server_time',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382065664QQKY',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=yourtime
formatdate=9',
'ordering'=>3,
'map'=>'',
'level'=>'0',
'initial'=>5,
'hidden'=>'0',
'fid'=>2464637,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_form_library_node_your_time',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1382065664QQKX',
'description'=>'1382065665JEHW' ),
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'c[library.node][cron]',
'level'=>'0',
'initial'=>5,
'hidden'=>'0',
'fid'=>2459012,
'core'=>1,
'did'=>'#library#library_crons',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'apps_preferences_form_library_node_cron',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350446IEXG',
'description'=>'1227580613HBMH' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=cronurl',
'ordering'=>5,
'map'=>'',
'level'=>'0',
'initial'=>5,
'hidden'=>'0',
'fid'=>2462977,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_cron_url',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1373207636DEVD',
'description'=>'1373207637APRW' ),
array(
'type'=>'output.datetime',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'c[scheduler.node][last_launched]',
'level'=>'0',
'initial'=>5,
'hidden'=>'0',
'fid'=>2462976,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_form_scheduler_node_last_launched',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1373207636DEVC',
'description'=>'1373207637APRV' ),
array(
'type'=>'output.datetime',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'map'=>'c[library.node][nextcron]',
'level'=>'0',
'initial'=>5,
'hidden'=>'0',
'fid'=>463843,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_form_library_node_nextcron',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1315887118PXIR',
'description'=>'1315887122AMOM' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>8,
'map'=>'c[scheduler.node][cronparallel]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465947,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_cronparallel',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1397755348IVCW',
'description'=>'1397755349MIED' ),
array(
'type'=>'main.seconds',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>9,
'map'=>'c[scheduler.node][cronfrequency]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456408,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_cronfrequency',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1235462003CNHJ',
'description'=>'1298294169DGIV' ),
array(
'type'=>'main.seconds',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>10,
'map'=>'c[scheduler.node][timelimit]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456409,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_timelimit',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961899DDLD',
'description'=>'1240906945NFCK' ),
array(
'type'=>'output.types',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=report',
'ordering'=>11,
'map'=>'c[scheduler.node][report]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456410,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_report',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961899DDKW',
'description'=>'1227579936RDAS' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'email=1',
'ordering'=>12,
'map'=>'c[scheduler.node][reportemail]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456411,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_reportemail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1230528896CZTU',
'description'=>'1230528895BZXE' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>13,
'map'=>'c[scheduler.node][maxtasks]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456412,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_maxtasks',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294169DGIX',
'description'=>'1298294169DGIY' ),
array(
'type'=>'output.text',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>14,
'map'=>'c[scheduler.node][maxprocess]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2455648,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_maxprocess',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298294169DGIZ',
'description'=>'1240906945NFCJ' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=10',
'ordering'=>15,
'map'=>'c[scheduler.node][usepwd]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456446,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_usepwd',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1299642847MBBJ',
'description'=>'1418159494SYHX' ),
array(
'type'=>'output.password',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=20',
'ordering'=>16,
'map'=>'c[scheduler.node][password]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2456414,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'apps_preferences_forms_scheduler_node_password',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DADP',
'description'=>'1299642742KTUN' )
);
}