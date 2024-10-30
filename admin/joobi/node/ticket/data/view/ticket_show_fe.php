<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_show_fe_view extends WDataView{
var $yid=1685;
var $wid='#ticket.node';
var $type=151;
var $params='subtitle=1';
var $namekey='ticket_show_fe';
var $menu=13;
var $frontend=1;
var $sid='#ticket.reply';
var $form=1;
var $icon='link';
var $rolid='#registered';
var $alias='Show a Ticket (frontend)';
var $useredit=1;
var $name='1206964391FHVU';
var $description='1470801897KNUT';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#ticket.reply',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'tkid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>463959,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_show_fe_ticket_reply_tkid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
nestedview=ticket_reply_head_show',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463958,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_show_fe_ticket',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVU',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
nestedview=ticket_replies_fe_show',
'ordering'=>3,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463957,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#registered',
'namekey'=>'ticket_show_fe_replies',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVD',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>102,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=backpublicfe',
'ordering'=>6,
'level'=>'0',
'icon'=>'back',
'action'=>'custom',
'mid'=>4127,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#registered',
'namekey'=>'ticket_show_fe_custom',
'faicon'=>'fa-undo',
'color'=>'danger',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961882TDHA',
'description'=>'' )
);
}