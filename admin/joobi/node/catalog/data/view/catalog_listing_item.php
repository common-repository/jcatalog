<?php defined('JOOBI_SECURE') or die('J....');
class Data_catalog_catalog_listing_item_view extends WDataView{
var $yid=501373;
var $wid='#catalog.node';
var $type=2;
var $params='horizmenu=1
hdata=appuse
cssfile=1';
var $namekey='catalog_listing_item';
var $menu=13;
var $frontend=1;
var $dropdown=3;
var $pagination=1;
var $filters=1;
var $sid='#item';
var $form=1;
var $icon='item';
var $rolid='#vendor';
var $alias='Catalog listing';
var $fields=1;
var $faicon='fa-book';
var $useredit=1;
var $pnamekey='item_listing_item';
var $name='1206961997BSZK';
var $description='1470801968BRUW';
var $wname='';
var $wdescription='';
var $seotitle='';
var $seodescription='';
var $seokeywords='';
var $listingsA=array(
array(
'type'=>'output.rownumber',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>1,
'map'=>'',
'lid'=>14032,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_number',
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
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'width=1%',
'ordering'=>2,
'map'=>'pid',
'lid'=>14033,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_checkbox',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732392OZVA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=editbutton
lien=controller=item&task=edit(eid=pid)
width=2%
align=center',
'ordering'=>3,
'map'=>'pid',
'lid'=>14060,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_item_edit',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.image',
'sid'=>'#item.images',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'thumb=1
dftimg=productx
imgfull=1
width=50px
align=center',
'ordering'=>4,
'map'=>'filid',
'lid'=>14034,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item__image',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206961936HCWJ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>5,
'map'=>'name',
'lid'=>14035,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_name_column',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=product&task=show(eid=pid)(titleheader=name)
classes=listingName',
'ordering'=>6,
'map'=>'name',
'lid'=>14036,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_name_column',
'name'=>'1206732392OZVB',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>7,
'map'=>'namekey',
'lid'=>14061,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_item_namekey',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_name_column',
'name'=>'1206961911NYAJ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item.typetrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>9,
'map'=>'name',
'lid'=>14071,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_item_typename',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_name_column',
'name'=>'1206732392OZVD',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#vendortrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'lien=controller=vendors&task=home(eid=vendor:vendid)(link=home)
popuplink=1',
'ordering'=>10,
'map'=>'name',
'lid'=>14072,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_item_vendor_name',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_name_column',
'name'=>'1221228435BYUA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#itemtrans',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1
truncate=150',
'ordering'=>11,
'map'=>'introduction',
'lid'=>14037,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_desccription',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_name_column',
'name'=>'1206732392OZVG',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'ovly=1',
'ordering'=>12,
'map'=>'alias',
'lid'=>14051,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_item_alias',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_name_column',
'name'=>'1211811583DBTA',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>13,
'map'=>'blocked',
'lid'=>14059,
'level'=>25,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_block',
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
'type'=>'main.removefk',
'sid'=>'#files',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=product,images
lid=5854',
'ordering'=>14,
'map'=>'filid',
'lid'=>14041,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_filid',
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
'sid'=>'#item.images',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>15,
'map'=>'pid',
'lid'=>14042,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_image_pid',
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
'sid'=>'#vendor',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>16,
'map'=>'vendid',
'lid'=>14043,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_vendid',
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
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>17,
'map'=>'vendid',
'lid'=>14044,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_item_vendid',
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
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>18,
'map'=>'curid',
'lid'=>14045,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_curid',
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
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=2
direction=1',
'ordering'=>19,
'map'=>'modified',
'lid'=>14046,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_modified',
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
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>20,
'map'=>'priceid',
'lid'=>14047,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_priceid',
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
'sid'=>'#item.type',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>21,
'map'=>'type',
'lid'=>14048,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_type_type',
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
'sid'=>'#item.type',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>22,
'map'=>'prodtypid',
'lid'=>14049,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_prodtypid',
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
'sid'=>'#vendortrans',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>24,
'map'=>'name',
'lid'=>14050,
'level'=>'0',
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_vendortrans_name',
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
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center',
'ordering'=>25,
'map'=>'',
'lid'=>14057,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_categories',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732411EGQQ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=item-category-assign&task=listing(pid=pid)(prodtypid=prodtypid)(titleheader=itemtrans:name)
usebtn=1
color=success
popuplink=1
align=right',
'ordering'=>26,
'map'=>'numcat',
'lid'=>14058,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_numcat',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_categories',
'name'=>'1206732411EGQQ',
'description'=>'1237279953JKRV',
'textlink'=>'1462285070SDYS' ),
array(
'type'=>'output.textlink',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
lien=controller=item-related&(eid=pid)(prodtypid=prodtypid)(titleheader=itemtrans:name)
usebtn=1
color=info
popuplink=1
align=center',
'ordering'=>27,
'map'=>'relnum',
'lid'=>15063,
'level'=>25,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_relnum',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'parentnamekey'=>'#catalog_listing_item_item_categories',
'name'=>'1258793662GTJM',
'description'=>'',
'textlink'=>'1462285070SDYT' ),
array(
'type'=>'output.text',
'sid'=>'0',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'align=center
nowarp=1',
'ordering'=>29,
'map'=>'',
'lid'=>14073,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_item_properties',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206961854HENV',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=priceinfo
align=center
style=font-weight:bold;
typec=currency.currency',
'ordering'=>30,
'map'=>'price',
'lid'=>14039,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_price',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_properties',
'name'=>'1206961911NYAN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center
nowarp=1
style=text-align:center',
'ordering'=>31,
'map'=>'availablestart',
'lid'=>14068,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_availablestart',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_properties',
'name'=>'1206961996STAF',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center
nowarp=1',
'ordering'=>32,
'map'=>'publishstart',
'lid'=>14069,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_publishstart',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_properties',
'name'=>'1206732366OVMC',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.datetime',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'formatdate=5
align=center
nowarp=1',
'ordering'=>33,
'map'=>'publishend',
'lid'=>14070,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_item_publishend',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_properties',
'name'=>'1231158811CQTV',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'filef=stock
align=center
nowarp=1
typec=product.stock',
'ordering'=>34,
'map'=>'stock',
'lid'=>14077,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_product_stock',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'parentnamekey'=>'#catalog_listing_item_item_properties',
'name'=>'1206961996STAE',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.access',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>35,
'map'=>'rolid',
'lid'=>14074,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_item_rolid',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732412DAEO',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.yesno',
'sid'=>'#vendor',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>36,
'map'=>'vendid',
'lid'=>14063,
'level'=>50,
'hidden'=>1,
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_vendor_vendid',
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
'type'=>'output.yesno',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'noscript=1
align=center',
'ordering'=>37,
'map'=>'featured',
'lid'=>14075,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_catalog_featured',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1256629159GBCH',
'description'=>'1257243216EZSY',
'textlink'=>'' ),
array(
'type'=>'output.textlink',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'remt=1
requirednode=security.node
lien=controller=security-visit-report&appuse=catalog.show.0(eid=pid)(titleheader=name)
lienrolid=storemanager
usebtn=1
color=warning
textlinkvalue=1
popuplink=1
poph=90%
popw=90%
align=center',
'ordering'=>40,
'map'=>'hits',
'lid'=>16542,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_product_hits_statistics',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1241506531DZAL',
'description'=>'',
'textlink'=>'1462285070SDYV' ),
array(
'type'=>'main.approve',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'noscript=1
align=center
lienrolid=storemanager',
'ordering'=>41,
'map'=>'blocked',
'lid'=>14076,
'level'=>50,
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_approved',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1246518570RHDZ',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.customized',
'sid'=>'#item',
'search'=>'0',
'publish'=>1,
'parent'=>'0',
'params'=>'order=1
direction=1
mb_showtitle=1
align=center
pnamekey=item.custompublish',
'ordering'=>42,
'map'=>'publish',
'lid'=>14040,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_publish',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>1,
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732372QTKN',
'description'=>'',
'textlink'=>'' ),
array(
'type'=>'output.text',
'sid'=>'#item',
'search'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'style=text-align:center',
'ordering'=>43,
'map'=>'pid',
'lid'=>14055,
'level'=>'0',
'hidden'=>'0',
'core'=>1,
'did'=>'0',
'ref_wid'=>'0',
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_id',
'fdid'=>'0',
'parentdft'=>'0',
'advsearch'=>'0',
'advordering'=>'0',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732400OWXG',
'description'=>'',
'textlink'=>'' )
);

var $menusA=array(
array(
'type'=>1,
'publish'=>1,
'parent'=>'0',
'params'=>'requirednode=vendors.node
lslct=1',
'ordering'=>1,
'level'=>50,
'icon'=>'profile',
'action'=>'vendors-change',
'mid'=>11071,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_assign',
'faicon'=>'fa-user',
'color'=>'primary',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1396671201CESO',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>2,
'level'=>50,
'icon'=>'',
'action'=>'divider',
'mid'=>11080,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#storemanager',
'namekey'=>'catalog_listing_item_assign_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>60,
'publish'=>1,
'parent'=>'0',
'params'=>'popheight=90%
popwidth=90%',
'ordering'=>3,
'level'=>'0',
'icon'=>'after',
'action'=>'product&task=import(producttype=controller)',
'mid'=>9256,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_import',
'faicon'=>'fa-arrow-down',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732405TIXA',
'description'=>'' ),
array(
'type'=>60,
'publish'=>1,
'parent'=>'0',
'params'=>'popheight=90%
popwidth=90%',
'ordering'=>5,
'level'=>'0',
'icon'=>'before',
'action'=>'product&task=selectexport(producttype=controller)',
'mid'=>9257,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_export',
'faicon'=>'fa-arrow-up',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732405TIXB',
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
'mid'=>11070,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_divider_export',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>3,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>8,
'level'=>'0',
'icon'=>'new',
'action'=>'nuevo',
'mid'=>9261,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_new',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFD',
'description'=>'' ),
array(
'type'=>10,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
lslct=1',
'ordering'=>9,
'level'=>'0',
'icon'=>'copy',
'action'=>'copyall',
'mid'=>9263,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_copy',
'faicon'=>'',
'color'=>'',
'xsvisible'=>33,
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'ph|_|tb',
'name'=>'1206732372QTKK',
'description'=>'' ),
array(
'type'=>90,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>10,
'level'=>50,
'icon'=>'default',
'action'=>'divider',
'mid'=>11359,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_divider_edit_22',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
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
'mid'=>9262,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_edit',
'faicon'=>'fa-pencil-square-o',
'color'=>'primary',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732361LXFE',
'description'=>'' ),
array(
'type'=>7,
'publish'=>1,
'parent'=>'0',
'params'=>'confirm=1
lslct=1',
'ordering'=>12,
'level'=>'0',
'icon'=>'delete',
'action'=>'deleteall',
'mid'=>9265,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_delete',
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
'ordering'=>13,
'level'=>'0',
'icon'=>'',
'action'=>'divider',
'mid'=>9264,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_divider',
'faicon'=>'',
'color'=>'',
'xsvisible'=>'0',
'xshidden'=>'0',
'devicevisible'=>'',
'devicehidden'=>'',
'name'=>'1206732399EINF',
'description'=>'' ),
array(
'type'=>16,
'publish'=>1,
'parent'=>'0',
'params'=>'',
'ordering'=>14,
'level'=>'0',
'icon'=>'help',
'action'=>'help',
'mid'=>9267,
'private'=>'0',
'position'=>'0',
'core'=>1,
'rolid'=>'#vendor',
'namekey'=>'catalog_listing_item_help',
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
'flid'=>'#catalog_listing_be_subimages',
'bktbefore'=>'0',
'sid'=>'#item.images',
'map'=>'premium',
'type'=>50,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'catalog_listing_be_subimages',
'name'=>'',
'ordering'=>2,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#catalog_subimages_filter_573',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'pid',
'type'=>9,
'ref_sid'=>'0',
'refmap'=>1,
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>2,
'params'=>'',
'namekey'=>'catalog_subimages_filter_573',
'name'=>'',
'ordering'=>3,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#catalog_listing_where_vendid_501373',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'vendid',
'type'=>1,
'ref_sid'=>'0',
'refmap'=>'catalog.customvendid',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>90,
'params'=>'',
'namekey'=>'catalog_listing_where_vendid_501373',
'name'=>'',
'ordering'=>4,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' ),
array(
'flid'=>'#catalog_product_checkaccess_573',
'bktbefore'=>'0',
'sid'=>'#item',
'map'=>'rolid',
'type'=>7,
'ref_sid'=>'0',
'refmap'=>'',
'bktafter'=>'0',
'logicopr'=>'0',
'level'=>'0',
'publish'=>1,
'condopr'=>29,
'typea'=>1,
'typeb'=>1,
'params'=>'',
'namekey'=>'catalog_product_checkaccess_573',
'name'=>'',
'ordering'=>5,
'requiresvalue'=>'0',
'requirednode'=>'0',
'rolid'=>'0',
'isadmin'=>'0' )
);

var $picklistA=array(
array(
'did'=>'#item#item_category_list',
'ordering'=>2 ),
array(
'did'=>'#item#item_type_listing_nuevo',
'ordering'=>'0' )
);
}