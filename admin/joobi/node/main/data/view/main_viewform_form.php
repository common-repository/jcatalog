<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_viewform_form_view extends WDataView{
var $yid=501365;
var $wizard=1;
var $wid='#main.node';
var $type=51;
var $params='autosave=1
phpfile=1';
var $namekey='main_viewform_form';
var $menu=13;
var $frontend=1;
var $pagination=1;
var $filters=1;
var $sid='#main.viewform';
var $form=1;
var $icon='column';
var $rolid='#allusers';
var $alias='Main Form Element';
var $name='1206732390BJLA';
var $description='';
var $wname='1340745649OCDR';
var $wdescription='1359486683BCQJ';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460805,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_general',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWZR',
'description'=>'' ),
array(
'type'=>'main.trans',
'sid'=>'#main.viewformtrans',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>3,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460040,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewformtrans_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206732392OZVB',
'description'=>'1356733769MIBX' ),
array(
'type'=>'main.transarea',
'sid'=>'#main.viewformtrans',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=quill.advanced',
'ordering'=>4,
'map'=>'description',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460042,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_viewformtrans_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206732346KLSC',
'description'=>'1356733769MIBY' ),
array(
'type'=>'output.customized',
'sid'=>'#main.viewform',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=typeform
exepicklist=1
exepicklisttask=apply
num=1',
'ordering'=>5,
'map'=>'type',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460002,
'core'=>1,
'did'=>'#main#main_form_type',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_type',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206732392OZVD',
'description'=>'1358294813IZVZ' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>6,
'map'=>'ordering',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459993,
'core'=>1,
'did'=>'#library#library_ordering',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_ordering',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206961869IGNP',
'description'=>'1356733768PTRF' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>7,
'map'=>'parent',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459998,
'core'=>1,
'did'=>'#main#main_form_parent',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_parent',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206732412DAEM',
'description'=>'1358294813IZVY' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1
width=20',
'ordering'=>8,
'map'=>'area',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460041,
'core'=>1,
'did'=>'#main#main_area',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_area2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206961869IGNI',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>9,
'map'=>'required',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460001,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_required',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1219769904NDIO',
'description'=>'1356733768PTRI' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>10,
'map'=>'readonly',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460000,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_readonly',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1219769904NDJG',
'description'=>'1356733768PTRH' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'initial',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460005,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_initial',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1219769905FKRC',
'description'=>'1347652452OQAJ' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'rolid',
'level'=>'0',
'initial'=>'0',
'hidden'=>'0',
'fid'=>2459995,
'core'=>1,
'did'=>'#role#role_user_access',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206732412DAEO',
'description'=>'1356733768PTRG' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459996,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1398436917DTKC',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>14,
'map'=>'publish',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2459999,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_publish',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_general',
'name'=>'1206732372QTKN',
'description'=>'' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2467490,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_display',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732366OVLY',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'xsvisible',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2467488,
'core'=>1,
'did'=>'#main#main_screen_size',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_xsvisible',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_display',
'name'=>'1407528942DMEQ',
'description'=>'1409690310HZWW' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'xshidden',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2467489,
'core'=>1,
'did'=>'#main#main_screen_size',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_xshidden',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_display',
'name'=>'1407528942DMER',
'description'=>'1407528942DMET' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'m[devicevisible]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2467909,
'core'=>1,
'did'=>'#main#main_device_type',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_devicevisible',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_display',
'name'=>'1409709084ILIV',
'description'=>'1409709084ILIZ' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'map'=>'m[devicehidden]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2467910,
'core'=>1,
'did'=>'#main#main_device_type',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_devicehidden',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_display',
'name'=>'1409709084ILIW',
'description'=>'1409709084ILJA' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'yid',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2459992,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_yid',
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
'type'=>'output.text',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'did',
'level'=>'0',
'initial'=>'',
'hidden'=>1,
'fid'=>2471452,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_main_form_main_viewform_did',
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
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460808,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_field_specific',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961936HCWR',
'description'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=formparams
spantit=1',
'ordering'=>23,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460809,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_nested',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_field_specific',
'name'=>'1227580858CXTV',
'description'=>'' ),
array(
'type'=>'output.tab',
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
'fid'=>2461541,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_attributes',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732421RJQZ',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>25,
'map'=>'parentdft',
'level'=>'0',
'initial'=>'0',
'hidden'=>'0',
'fid'=>2462124,
'core'=>1,
'did'=>'#main#main_view_forms_default_parent',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_parentdft',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_attributes',
'name'=>'1360166005IDUM',
'description'=>'1360166005IDUN' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>26,
'map'=>'p[notitle]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461542,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_notitle',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_attributes',
'name'=>'1358294812QEQR',
'description'=>'1358294813IZWB' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>27,
'map'=>'p[spantit]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2461543,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_spantit',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_attributes',
'name'=>'1358294812QEQS',
'description'=>'1358294813IZWC' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>29,
'map'=>'p[onlynew]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2464519,
'core'=>1,
'did'=>'#main#main_form_edit_when_to_edit',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_onlynew',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_attributes',
'name'=>'1242179630OEQT',
'description'=>'1358294813IZWD' ),
array(
'type'=>'output.select',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>30,
'map'=>'p[tipstyle]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2469228,
'core'=>1,
'did'=>'#main#main_tooltip_style',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_tipstyle',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_attributes',
'name'=>'1415377877PTRF',
'description'=>'1415378022OZRU' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>31,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460806,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_style',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961869IGOF',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=20',
'ordering'=>34,
'map'=>'p[classes]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460812,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_style_classes',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_style',
'name'=>'1206961870KLAJ',
'description'=>'1356733769MICG' ),
array(
'type'=>'output.textarea',
'sid'=>'#main.viewform',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'editor=default',
'ordering'=>35,
'map'=>'p[style]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460813,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_style_style',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_style',
'name'=>'1206961869IGOF',
'description'=>'1356733769MICH' ),
array(
'type'=>'output.tab',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>37,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471886,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_code',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961912MJQB',
'description'=>'' ),
array(
'type'=>'output.layout',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'spantit=1
nestedview=main_params_form_main_phpcustom',
'ordering'=>38,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471887,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_code_nested',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#main_viewform_form_code',
'name'=>'1206961912MJQB',
'description'=>'' )
);

var $menusA=array(
array(
'type'=>6,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1',
'ordering'=>1,
'level'=>'0',
'icon'=>'save',
'action'=>'apply',
'mid'=>9230,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_apply',
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
'params'=>'formvalidation=1',
'ordering'=>2,
'level'=>'0',
'icon'=>'done',
'action'=>'save',
'mid'=>10595,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_save_normal',
'faicon'=>'fa-check',
'color'=>'success',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1242282449PIPC',
'description'=>'' ),
array(
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'formvalidation=1
ajax=1
refresh=1',
'ordering'=>3,
'level'=>'0',
'icon'=>'done',
'action'=>'save',
'mid'=>9229,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_save_ajax',
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
'params'=>'ajax=1
refresh=1',
'ordering'=>4,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>9231,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'main_viewform_form_cancel',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732393CXVV',
'description'=>'' )
);

var $filtersA=array(
array(
'flid'=>'#main_viewform_form_lgid',
'bktbefore'=>'0',
'sid'=>'#main.viewformtrans',
'map'=>'lgid',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>'lgid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>150,
'params'=>'',
'namekey'=>'main_viewform_form_lgid',
'name'=>'',
'ordering'=>1,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);
}