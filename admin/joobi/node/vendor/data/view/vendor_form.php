<?php defined('JOOBI_SECURE') or die('J....');
class Data_vendor_vendor_form_view extends WDataView{
var $yid=1579;
var $wizard=1;
var $wid='#vendor.node';
var $type=51;
var $params='autosave=1
subtitle=1';
var $namekey='vendor_form';
var $menu=13;
var $sid='#vendor';
var $form=1;
var $icon='about';
var $rolid='#vendor';
var $alias='Vendor form';
var $useredit=1;
var $name='1221228435BYUA';
var $description='';
var $wname='1227581071SHRC';
var $wdescription='1272517048FSHD';
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
'ordering'=>2,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465726,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_form_column1',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1394069593IQAS',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>3,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465725,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_form_store_information',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_column1',
'name'=>'1314356495SHXX',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendortrans',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>4,
'map'=>'name',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463439,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_name',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_store_information',
'name'=>'1206732392OZVB',
'description'=>'1227581071SHQP' ),
array(
'type'=>'output.email',
'sid'=>'#vendor',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'email=1',
'ordering'=>5,
'map'=>'email',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464256,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_email',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_store_information',
'name'=>'1206732411EGRU',
'description'=>'1227581071SHQQ' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>6,
'map'=>'website',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463442,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_website',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_store_information',
'name'=>'1206961850KLRB',
'description'=>'1227581071SHQR' ),
array(
'type'=>'output.file',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>7,
'map'=>'filid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464257,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_filid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_store_information',
'name'=>'1206961997BSYJ',
'description'=>'' ),
array(
'type'=>'main.transarea',
'sid'=>'#vendortrans',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'description',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2460187,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_description',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_store_information',
'name'=>'1206732392OZVG',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'x[update_email]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>464266,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_update_email',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_store_information',
'name'=>'1234340112SMFV',
'description'=>'1234340112SMFT' ),
array(
'type'=>'output.select',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'map'=>'curid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>463694,
'core'=>1,
'did'=>'#currency#currency_currencies',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_curid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_store_information',
'name'=>'1206961948HYTE',
'description'=>'1251253370POJP' ),
array(
'type'=>'output.column',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>11,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2465727,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#allusers',
'namekey'=>'vendor_form_column2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1394069593IQAT',
'description'=>'' ),
array(
'type'=>'output.fieldset',
'sid'=>'0',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>12,
'map'=>'',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459447,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_shipping_address',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_column2',
'name'=>'1305714794DGRG',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'maxlgt=100
alphanum=1',
'ordering'=>13,
'map'=>'originaddress',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459448,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_originaddress',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_shipping_address',
'name'=>'1330732086QQWK',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'maxlgt=100
alphanum=1',
'ordering'=>14,
'map'=>'originaddress2',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459449,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_originaddress2',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_shipping_address',
'name'=>'1330732086QQWL',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'maxlgt=100
alphanum=1',
'ordering'=>15,
'map'=>'origincity',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459450,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_origincity',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_shipping_address',
'name'=>'1206961922ESOY',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'maxlgt=100
alphanum=1',
'ordering'=>16,
'map'=>'originstate',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459451,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_originstate',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_shipping_address',
'name'=>'1206961922ESOZ',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendor',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'maxlgt=30
alphanum=1',
'ordering'=>17,
'map'=>'originzipcode',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459453,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_originzipcode',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_shipping_address',
'name'=>'1330731950JWCH',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#vendor',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'originctyid',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2459452,
'core'=>1,
'did'=>'#countries#countries_published_list',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_originctyid',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#vendor_form_shipping_address',
'name'=>'1206961922ESPA',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#vendor',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>19,
'map'=>'vendid',
'level'=>'0',
'initial'=>1,
'hidden'=>1,
'fid'=>463695,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#vendor',
'namekey'=>'vendor_form_vendor_vendid',
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
'type'=>4,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'level'=>'0',
'icon'=>'done',
'action'=>'save',
'mid'=>3602,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'vendor_form_save',
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
'ordering'=>2,
'level'=>'0',
'icon'=>'cancel',
'action'=>'cancel',
'mid'=>3603,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'vendor_form_cancel',
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
'mid'=>8612,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'vendor_form_help',
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