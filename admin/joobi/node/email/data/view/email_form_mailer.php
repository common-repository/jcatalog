<?php defined('JOOBI_SECURE') or die('J....');
class Data_email_email_form_mailer_view extends WDataView{
var $yid=501456;
var $wid='#email.node';
var $type=51;
var $params='autosave=1
phpfile=1';
var $namekey='email_form_mailer';
var $menu=13;
var $pagination=1;
var $sid='#email.mailer';
var $form=1;
var $icon='send';
var $rolid='#admin';
var $alias='email mailer Form';
var $name='1206732441PCHA';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.column',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461763,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'email_form_mailer_column_1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350843FMVJ',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=success',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461778,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_fieldset_general',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_column_1',
'name'=>'1206732400OWZR',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'alias',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461493,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_alias',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_general',
'name'=>'1206732392OZVB',
'description'=>'1358226528JUFE' ),
array(
'type'=>'output.select',
'sid'=>'#email.mailer',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'exepicklist=1
exepicklisttask=apply
num=1',
'ordering'=>4,
'map'=>'type',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461492,
'core'=>1,
'did'=>'#email#email_mailer_method',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_type',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_general',
'name'=>'1206732392OZVD',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461494,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_general',
'name'=>'1398436917DTKC',
'description'=>'1358226528JUFF' ),
array(
'type'=>'output.select',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'rolid',
'level'=>'0',
'initial'=>'0',
'hidden'=>'0',
'fid'=>2461491,
'core'=>1,
'did'=>'#role#role_user_access',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_general',
'name'=>'1206732412DAEO',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>7,
'map'=>'publish',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461498,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_publish',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_general',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'ordering',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465283,
'core'=>1,
'did'=>'#library#library_ordering',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_ordering',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_general',
'name'=>'1206961869IGNP',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=danger',
'ordering'=>9,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471668,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_fieldset_email_api',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_column_1',
'name'=>'1489110276HFZA',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=40',
'ordering'=>10,
'map'=>'p[api_key]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471669,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_api_key',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_api',
'name'=>'1357296145DBZH',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=warning',
'ordering'=>11,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461779,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_fieldset_email_settings',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_column_1',
'name'=>'1358607725MHJP',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'sendername',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461499,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_sendername',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1358607725MHJL',
'description'=>'1358226528JUFG' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>13,
'map'=>'senderemail',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461500,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_senderemail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1358607725MHJM',
'description'=>'1358226528JUFH' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'map'=>'replyname',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461501,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_replyname',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1206732400OXAD',
'description'=>'1358226528JUFI' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>15,
'map'=>'replyemail',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461502,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_replyemail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1211811588SCXV',
'description'=>'1358226528JUFJ' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>16,
'map'=>'bouncebackemail',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461503,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_bouncebackemail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1358607725MHJN',
'description'=>'1358226528JUFK' ),
array(
'type'=>'output.yesno',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'addnames',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2461509,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_addnames',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1221500643MXPC',
'description'=>'1358226528JUFP' ),
array(
'type'=>'output.yesno',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>18,
'map'=>'embedimages',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461504,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_embedimages',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1302521434QABP',
'description'=>'1358226528JUFL' ),
array(
'type'=>'output.select',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=main.node',
'ordering'=>19,
'map'=>'p[attachement]',
'level'=>'0',
'initial'=>'attached',
'hidden'=>'0',
'fid'=>2471747,
'core'=>1,
'did'=>'#main#main_attachement',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_attachement',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1490899736NQWF',
'description'=>'1457054596SPIP' ),
array(
'type'=>'output.numeric',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=8',
'ordering'=>20,
'map'=>'wordwrapping',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461508,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_wordwrapping',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1358226528JUFD',
'description'=>'1358226528JUFO' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=8',
'ordering'=>21,
'map'=>'charset',
'level'=>'0',
'initial'=>'utf-8',
'hidden'=>'0',
'fid'=>2461507,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_charset',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1206732400OXAO',
'description'=>'1358226528JUFN' ),
array(
'type'=>'output.select',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>22,
'map'=>'encodingformat',
'level'=>'0',
'initial'=>'base64',
'hidden'=>'0',
'fid'=>2461506,
'core'=>1,
'did'=>'#email#email_encoding_format',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_encodingformat',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1206732441PCHC',
'description'=>'1358226528JUFM' ),
array(
'type'=>'output.yesno',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>23,
'map'=>'multiplepart',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2461505,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_multiplepart',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_email_settings',
'name'=>'1238386599SWCB',
'description'=>'1238386599SWCA' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465274,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_fieldset_sms_settings',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_column_1',
'name'=>'1391084842GKUF',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>25,
'map'=>'p[sms_api]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465275,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_email_mailer_p_sms_api',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_sms_settings',
'name'=>'1389275714NKEJ',
'description'=>'1391438276NUIV' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>26,
'map'=>'p[sms_username]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465290,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_email_mailer_p_sms_username',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_sms_settings',
'name'=>'1206732411EGRV',
'description'=>'1391438276NUIW' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>27,
'map'=>'p[sms_password]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465291,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_email_mailer_p_sms_password',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_sms_settings',
'name'=>'1206732412DADP',
'description'=>'1359161169KTCE' ),
array(
'type'=>'output.column',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>28,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461764,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#manager',
'namekey'=>'email_form_mailer_column_2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1298350843FMVK',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=success',
'ordering'=>29,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461776,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_fieldset_smtp',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_column_2',
'name'=>'1206732400OXAV',
'description'=>'' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>30,
'map'=>'p[smtppass]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461775,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_smtp_password',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_smtp',
'name'=>'1206732400OXBF',
'description'=>'1358607726ARXQ' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>31,
'map'=>'p[smtphost]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461770,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_smtp_host',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_smtp',
'name'=>'1242282446GIJE',
'description'=>'1358540757MXST' ),
array(
'type'=>'output.tab',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>32,
'map'=>'p[smtpsecure]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461772,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_smtp_secure',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_smtp',
'name'=>'1206732400OXAZ',
'description'=>'1358607725MHJQ' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>33,
'map'=>'p[smtpauth]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461773,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_smtp_authentication_required',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_smtp',
'name'=>'1206732400OXBB',
'description'=>'1358607726ARXO' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>34,
'map'=>'p[smtpport]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461771,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_smtp_port',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_smtp',
'name'=>'1291008730NUNX',
'description'=>'1369749928OEAZ' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>35,
'map'=>'p[smtpuser]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461774,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_smtp_username',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_smtp',
'name'=>'1206732400OXBD',
'description'=>'1358607726ARXP' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=success',
'ordering'=>43,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461777,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_fieldset_send_mail',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_column_2',
'name'=>'1358607725MHJO',
'description'=>'' ),
array(
'type'=>'output.email',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>44,
'map'=>'p[hostname]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461769,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_mailer_hostname_',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_send_mail',
'name'=>'1213269308ATGG',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>45,
'map'=>'p[sendmail]',
'level'=>'0',
'initial'=>'/usr/sbin/sendmail',
'hidden'=>'0',
'fid'=>2461765,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_send_mail_path',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_send_mail',
'name'=>'1206732400OXAS',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'color=danger',
'ordering'=>46,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465199,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_fieldset_dkim',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_column_2',
'name'=>'1389097357SYEW',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>47,
'map'=>'p[mailerdkimyesno]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465200,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_dkim_yesno',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_dkim',
'name'=>'1389276474NYRE',
'description'=>'1389276474NYRF' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>48,
'map'=>'p[dkimkeyloc]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465201,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_dkim_private_key_loc',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_dkim',
'name'=>'1389109176QJTH',
'description'=>'1389109176QJTK' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>49,
'map'=>'p[dkimpassphrase]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465202,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'email_form_mailer_dkim_passphrase',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#email_form_mailer_fieldset_dkim',
'name'=>'1389109176QJTI',
'description'=>'1389109176QJTL' ),
array(
'type'=>'output.text',
'sid'=>'#email.mailer',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>50,
'map'=>'designation',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2465284,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#admin',
'namekey'=>'email_form_mailer_designation',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGND',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>6,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'save',
'action'=>'apply',
'mid'=>9598,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'email_mailer_form_apply',
'faicon'=>'fa-floppy-o',
'color'=>'info',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINB',
'description'=>'' ),
array(
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>'0',
'icon'=>'done',
'action'=>'save',
'mid'=>9599,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'email_mailer_form_save',
'faicon'=>'fa-check',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIPC',
'description'=>'' ),
array(
'type'=>5,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>9600,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'email_mailer_form_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>9601,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'email_mailer_form_help',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZUP',
'description'=>'' )
);
}