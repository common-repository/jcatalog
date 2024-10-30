<?php defined('JOOBI_SECURE') or die('J....');
class Data_mailbox_mailbox_bounce_messages_report_view extends WDataView{
var $yid=500850;
var $wizard=1;
var $wid='#mailbox.node';
var $type=2;
var $params='hdata=jdoctype
report=1
axisstyle=combined
graphtype=';
var $namekey='mailbox_bounce_messages_report';
var $menu=13;
var $level=25;
var $dropdown=3;
var $pagination=1;
var $sid='#mailbox.messages';
var $form=1;
var $icon='report';
var $rolid='#admin';
var $alias='Bounce Messages Report';
var $faicon='fa-pie-chart';
var $name='1263527489DDRU';
var $description='';
var $wname='1253693139FSTT';
var $wdescription='1275727304KGSZ';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#mailbox.messages',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=19
align=center',
'ordering'=>1,
'map'=>'created',
'lid'=>10158,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'bounce_messages_report_mailbox_messages_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961850KLRI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#mailbox.messages',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=2
coltotal=1
align=center
style=font-weight:bold;',
'ordering'=>2,
'map'=>'msgid',
'lid'=>10159,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'bounce_messages_report_mailbox_messages_msgid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1263527488PFLQ',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8813,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'bounce_messages_report_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);

var $picklistA=array(
array(
'did'=>'#mailbox#mailbox_rule',
'ordering'=>'0' )
);
}