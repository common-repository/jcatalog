<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Default_comment_preferences {
var $allowreply=1;
var $cmtapproval=0;
var $cmtarticle=1;
var $cmtaverating=1;
var $cmtcharlength=500;
var $cmtdate=1;
var $cmtnonorreg=1;
var $cmtnotifyadmin=1;
var $cmtnotifyauthor=1;
var $cmtnotifyemail='';
var $cmtorder='';
var $cmtrating=1;
var $editor='';
var $getavatar=5;
var $allowimage=0;
}
class Role_comment_preferences {
var $allowreply='manager';
var $cmtapproval='admin';
var $cmtarticle='manager';
var $cmtaverating='manager';
var $cmtcharlength='manager';
var $cmtdate='manager';
var $cmtnonorreg='manager';
var $cmtnotifyadmin='manager';
var $cmtnotifyauthor='manager';
var $cmtnotifyemail='manager';
var $cmtorder='manager';
var $cmtrating='manager';
var $editor='manager';
var $getavatar='admin';
var $allowimage='admin';
}