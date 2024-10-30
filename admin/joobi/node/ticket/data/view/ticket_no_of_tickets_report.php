<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_no_of_tickets_report_view extends WDataView{
var $yid=500759;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $params='hdata=jdoctype
report=1
axisstyle=compared';
var $namekey='ticket_no_of_tickets_report';
var $menu=13;
var $level=50;
var $dropdown=3;
var $pagination=1;
var $sid='#ticket';
var $form=1;
var $icon='report';
var $rolid='#supportmanager';
var $alias='Total No. of Tickets report';
var $faicon='fa-pie-chart';
var $useredit=1;
var $name='1257230973OYBZ';
var $description='';
var $wname='1253693139FSTT';
var $wdescription='1271935568TCVD';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=19
align=center',
'ordering'=>1,
'map'=>'created',
'lid'=>9322,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'no_of_tickets_report_ticket_created',
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
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'dsict=2
chartaxis=2d
coltotal=1
align=center
style=font-weight:bold;',
'ordering'=>2,
'map'=>'tkid',
'lid'=>9323,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#admin',
'namekey'=>'no_of_tickets_report_ticket_tkid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1257230973OYBY',
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
'mid'=>8783,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#admin',
'namekey'=>'no_of_tickets_report_help',
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
'did'=>'#ticket#ticket_status_reports',
'ordering'=>'0' )
);
}