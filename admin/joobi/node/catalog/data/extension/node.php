<?php defined('JOOBI_SECURE') or die('J....');
class Data_Catalog_Node_extension extends WDataExtension{
var $publish=1;
var $folder='catalog';
var $wid=1486;
var $type=150;
var $name='Catalog';
var $destination='node';
var $trans=1;
var $namekey='catalog.node';
var $version=4590;
var $lversion=4590;
var $pref=1;
var $install='';
var $description='1298350963FZPH';
var $descriptionTxt='Node to manage the end-user catalog or items and products.';
var $dependencyA=array('address.node','comment.node','item.node'
);
}