<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_move_view extends WDataView{
var $yid=1706;
var $wid='#ticket.node';
var $type=51;
var $params='subtitle=1
autosave=1
mtype=image';
var $namekey='ticket_move';
var $menu=13;
var $level=50;
var $form=1;
var $icon='tags';
var $rolid='#supportmanager';
var $alias='Move Ticket';
var $useredit=1;
var $name='1231388362IOOK';
var $description='1470801897KNUX';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.select',
'sid'=>'0',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'x[project]',
'level'=>50,
'initial'=>'',
'hidden'=>'0',
'fid'=>464109,
'core'=>1,
'did'=>'#ticket#ticket_jproject_all_select_one',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'ticket_move_project',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1231388360NYRN',
'description'=>'1231388360NYRM' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1',
'ordering'=>1,
'level'=>50,
'icon'=>'save',
'action'=>'moveprojectsave',
'mid'=>4198,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_move_moveprojectsave',
'faicon'=>'fa-floppy-o',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961849MVDR',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>50,
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>4197,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'ticket_move_cancel',
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