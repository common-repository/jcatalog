<?php defined('JOOBI_SECURE') or die('J....');
class Data_comment_cmnt_replies_addreply_show_view extends WDataView{
var $yid=500838;
var $wid='#comment.node';
var $type=51;
var $params='subtitle=1
mtype=image
htmlfile=1
autosave=1
viewarea=["body","top"]';
var $namekey='cmnt_replies_addreply_show';
var $frontend=1;
var $level=50;
var $sid='#comment.reply';
var $form=1;
var $icon='default';
var $tmid=711;
var $rolid='#allusers';
var $alias='CmntRepliesAddReply Show';
var $name='1206964391FHVD';
var $description='1470801914KFJC';
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
'readonly'=>'0',
'publish'=>'0',
'parent'=>'0',
'params'=>'spantit=1
nestedview=comment_listing_be',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>467018,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'top',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'cmnt_replies_addreply_show_reply_head',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1262855105MYEP',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
nestedview=comment_reply_fe',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>467020,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'body',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'cmnt_replies_addreply_show_previous_replies',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1262855105MYEQ',
'description'=>'' )
);
}