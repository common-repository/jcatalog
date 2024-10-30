<?php defined('JOOBI_SECURE') or die('J....');
class Data_ticket_ticket_pending_listing_be_view extends WDataView{
var $yid=1889;
var $wizard=1;
var $wid='#ticket.node';
var $type=2;
var $params='phpfile=1';
var $namekey='ticket_pending_listing_be';
var $menu=13;
var $level=50;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#ticket';
var $form=1;
var $icon='link';
var $rolid='#supportagent';
var $alias='Queue Tickets backend';
var $fields=1;
var $useredit=1;
var $name='1243515654YGZ';
var $description='1470801897KNUS';
var $wname='1215507804KDXT';
var $wdescription='1242891602SJBW';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'tkid',
'lid'=>7209,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_tkid_7',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'authoruid',
'lid'=>7210,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_authoruid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'pjid',
'lid'=>7226,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_pjid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket.project',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'pjid',
'lid'=>7227,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_project_pjid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.rownumber',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'tkid',
'lid'=>7211,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_tkid_6',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.checkbox',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1',
'ordering'=>6,
'map'=>'tkid',
'lid'=>7212,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_tkid_5',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206964391FHVO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.butedit',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=ticket&task=edit(eid=tkid)
width=30',
'ordering'=>7,
'map'=>'tkid',
'lid'=>7213,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_tkid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732361LXFE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'name',
'lid'=>7214,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_tickettrans_name_4',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAGC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'lock',
'lid'=>7594,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_lock',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_tickettrans_name_4',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'filef=unread
remt=1
lien=controller=ticket-reply&task=listing&private=false(tkid=tkid)(tktypeid=tktypeid)(priority=priority)(authoruid=authoruid)',
'ordering'=>10,
'map'=>'name',
'lid'=>7215,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_tickettrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_tickettrans_name_4',
'name'=>'1206732412DAGC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
width=80
align=center',
'ordering'=>11,
'map'=>'namekey',
'lid'=>7216,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_tickettrans_name_4',
'name'=>'1206732400OWXG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#tickettrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>12,
'map'=>'description',
'lid'=>7217,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_tickettrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_tickettrans_name_4',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=40
align=center',
'ordering'=>13,
'map'=>'status',
'lid'=>7230,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'#ticket#ticket_status_form',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_status_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVH',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=15%',
'ordering'=>14,
'map'=>'',
'lid'=>7218,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_details',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961936HCWR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket.projecttrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=category
remt=1
truncate=20
align=center',
'ordering'=>15,
'map'=>'name',
'lid'=>7228,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_projecttrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206732411EGQO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=typelisting
remt=1
width=50
align=center
style=font-weight:bold;',
'ordering'=>16,
'map'=>'tktypeid',
'lid'=>7219,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_type',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206732392OZVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=priority
typec=ticket.priority
width=50
align=center',
'ordering'=>17,
'map'=>'priority',
'lid'=>7229,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_priority',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961898PIOD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#product',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=product.node',
'ordering'=>18,
'map'=>'pid',
'lid'=>9004,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_product_pid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#product.categoryproduct',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=product.node',
'ordering'=>19,
'map'=>'catid',
'lid'=>9005,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_product_categoryproduct_catid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#product',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=product.node',
'ordering'=>20,
'map'=>'namekey',
'lid'=>9006,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_product_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#joomla.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=joomla.node',
'ordering'=>21,
'map'=>'id',
'lid'=>9007,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_joomla_content_id',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#joomla.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=joomla.node',
'ordering'=>22,
'map'=>'alias',
'lid'=>9008,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_joomla_content_alias',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#joomla.content',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=joomla.node',
'ordering'=>23,
'map'=>'catid',
'lid'=>9009,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_joomla_content_catid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'map'=>'commenttype',
'lid'=>9010,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_commenttype',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_details',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>25,
'map'=>'',
'lid'=>7220,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRY',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=users&task=show(eid=authoruid)
align=center',
'ordering'=>26,
'map'=>'name',
'lid'=>7221,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_users_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_created',
'name'=>'1213117657LKZK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#users',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>27,
'map'=>'username',
'lid'=>7233,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_users_username',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_created',
'name'=>'1206961869IGND',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
remt=1
formatdate=5
width=110
align=center',
'ordering'=>28,
'map'=>'created',
'lid'=>7222,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_created_3',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_created',
'name'=>'1206961850KLRI',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=2
direction=1
remt=1
formatdate=73
align=center',
'ordering'=>29,
'map'=>'created',
'lid'=>7231,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_created',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_created',
'name'=>'1215507804KDYB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1',
'ordering'=>30,
'map'=>'replies',
'lid'=>7223,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_replies_2',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'direction=1
dsict=2
style=font-weight:bold;',
'ordering'=>31,
'map'=>'replies',
'lid'=>7224,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_replies',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_ticket_replies_2',
'name'=>'1206964391FHVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
width=110
align=center',
'ordering'=>32,
'map'=>'modified',
'lid'=>7225,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_modified_1',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_ticket_replies_2',
'name'=>'1215507804KDYD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=73
style=font-weight:bold;font-size:12px;',
'ordering'=>33,
'map'=>'modified',
'lid'=>7232,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_modified',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_ticket_replies_2',
'name'=>'1215507804KDYB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=assignedto
lien=controller=controller=users&task=show(eid=assignuid)
style=font-style:italic;float: left; clear: both;',
'ordering'=>34,
'map'=>'assignuid',
'lid'=>10364,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_assignuid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#pending_tickets_be_ticket_replies_2',
'name'=>'1209674948GCLR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>35,
'map'=>'',
'lid'=>7234,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'ticket_pending_listing_be_response_time',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1227581114PJCA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=resptimeg
typec=ticket.resptimeg',
'ordering'=>37,
'map'=>'resptime',
'lid'=>7235,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_resptime',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_pending_listing_be_response_time',
'name'=>'1230530179NTHK',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1
formatdate=73',
'ordering'=>38,
'map'=>'deadline',
'lid'=>7236,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_deadline',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#ticket_pending_listing_be_response_time',
'name'=>'1209674948GCLT',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=isprivate
typec=ticket.privacy
align=center',
'ordering'=>39,
'map'=>'private',
'lid'=>7237,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_private',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1219769905FKPR',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>41,
'map'=>'sticky',
'lid'=>7272,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_sticky',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282439OJUA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#ticket',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>42,
'map'=>'read',
'lid'=>10854,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#author',
'namekey'=>'pending_tickets_be_ticket_read',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'1275546208KHTI',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>50,
'icon'=>'filter',
'action'=>'controller=ticket&task=listingassigned',
'mid'=>5102,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_my_tickets',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206964391FHVC',
'description'=>'' ),
array(
'type'=>50,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'level'=>50,
'icon'=>'up',
'action'=>'controller=ticket',
'mid'=>5205,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_all_tickets',
'faicon'=>'fa-arrow-up',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241519400RGCD',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>7,
'level'=>50,
'icon'=>'',
'action'=>'divider',
'mid'=>5103,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>8,
'level'=>50,
'icon'=>'move',
'action'=>'moveproject',
'mid'=>5101,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_moveproject',
'faicon'=>'fa-arrows',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961849MVDR',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'level'=>50,
'icon'=>'',
'action'=>'divider',
'mid'=>5097,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_divider_121',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGRN',
'description'=>'' ),
array(
'type'=>3,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'level'=>'0',
'icon'=>'new',
'action'=>'add',
'mid'=>5094,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_add',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFD',
'description'=>'' ),
array(
'type'=>2,
'publish'=>1,
'parent'=>'0',
'params'=>'lslct=1',
'ordering'=>11,
'level'=>'0',
'icon'=>'edit',
'action'=>'edit',
'mid'=>5095,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_edit',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>5100,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_divider_119',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>7,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
lslct=1',
'ordering'=>13,
'level'=>'0',
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>5096,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_deleteall',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKL',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>5098,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_divider_120',
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
'ordering'=>16,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>8705,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#manager',
'namekey'=>'pending_tickets_be_help',
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
'flid'=>'#project_publish',
'bktbefore'=>'0',
'sid'=>'#ticket.project',
'map'=>'publish',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'project_publish',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_pending',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'status',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>20,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'tickets_pending',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_pending_projectmembers',
'bktbefore'=>'0',
'sid'=>'#ticket.projectmembers',
'map'=>'uid',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>'uid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>50,
'params'=>'',
'namekey'=>'tickets_pending_projectmembers',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#pending_tickets_sticky',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'sticky',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'pending_tickets_sticky',
'name'=>'',
'ordering'=>6,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#tickets_pending_modified',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'modified',
'type'=>8,
'ref_sid'=>'0',
'refmap'=>'ASC',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'tickets_pending_modified',
'name'=>'',
'ordering'=>7,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#mytickets_comment_pref',
'bktbefore'=>'0',
'sid'=>'#ticket',
'map'=>'comment',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'ticket.commentfilter',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>50,
'publish'=>1,
'condopr'=>15,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'mytickets_comment_pref',
'name'=>'',
'ordering'=>9,
'requiresvalue'=>'0',
'requirednode'=>'joomla.node',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#ticket#ticket_categories',
'ordering'=>3 ),
array(
'did'=>'#ticket#ticket_types',
'ordering'=>1 ),
array(
'did'=>'#ticket#ticket_status_select',
'ordering'=>2 )
);
}