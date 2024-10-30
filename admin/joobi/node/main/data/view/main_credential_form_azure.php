<?php defined('JOOBI_SECURE') or die('J....');
class Data_main_main_credential_form_azure_view extends WDataView{
var $yid=502395;
var $wid='#main.node';
var $type=51;
var $params='autosave=1';
var $namekey='main_credential_form_azure';
var $menu=13;
var $pagination=1;
var $sid='#main.credential';
var $form=1;
var $icon='db';
var $rolid='#sadmin';
var $alias='Azure Credential form';
var $name='1355852779ARKR';
var $description='';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $formsA=array(
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'alias',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471589,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_alias',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'map'=>'namekey',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471631,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1398368572EKXT',
'description'=>'' ),
array(
'type'=>'output.select',
'sid'=>'#main.credential',
'required'=>1,
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'exepicklist=1
exepicklisttask=apply
num=1',
'ordering'=>3,
'map'=>'crdidtype',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471590,
'core'=>1,
'did'=>'#main#main_credentials_type',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_type',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVD',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1
width=50',
'ordering'=>4,
'map'=>'p[services]',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2471629,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_services',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1484683609QLUE',
'description'=>'1484683611EOSB' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'username',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471593,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_account',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1484683609QLUC',
'description'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>6,
'map'=>'p[ssl]',
'level'=>'0',
'initial'=>1,
'hidden'=>'0',
'fid'=>2471596,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_ssl',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1360366419PVEQ',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=50',
'ordering'=>7,
'map'=>'passcode',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471594,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_key',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1484683609QLUD',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'map'=>'directory',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471592,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_container',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1484683609QLUB',
'description'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=60',
'ordering'=>9,
'map'=>'url',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471591,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_url',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1484683609QLUA',
'description'=>'1425489474KFSW' ),
array(
'type'=>'output.text',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=60',
'ordering'=>10,
'map'=>'p[sas]',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471630,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_sas',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1484683609QLUF',
'description'=>'' ),
array(
'type'=>'output.publish',
'sid'=>'#main.credential',
'required'=>'0',
'readonly'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'num=1',
'ordering'=>13,
'map'=>'publish',
'level'=>'0',
'initial'=>'',
'hidden'=>'0',
'fid'=>2471595,
'core'=>1,
'did'=>'0',
'private'=>'0',
'area'=>'',
'ref_yid'=>'0',
'frame'=>'0',
'rolid'=>'#sadmin',
'namekey'=>'main_preferences_forms_fieldset_storage_azure_publish',
'fdid'=>'0',
'parentdft'=>'0',
'checktype'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
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
'mid'=>14580,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8pmkz72c_copy1480938763',
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
'mid'=>14581,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8pmkz72d_copy1480938763',
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
'mid'=>14582,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#allusers',
'namekey'=>'2c8pmkz72e_copy1480938763',
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