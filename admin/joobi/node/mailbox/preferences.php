<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Default_mailbox_preferences {
var $opentimeout=10;
var $maxemails=10;
var $deletemsg=7776000;
var $deletestats=31104000;
var $identifyemail='youremail@yourdomain.com';
var $trashdelmsg=30;
var $removestyle=1;
var $removescript=1;
var $harduserdelete=0;
var $harduserblock=1;
var $harduserblockreg=0;
var $harduserunconfirm=1;
var $harduserunsusbcribe=1;
var $hardusersubscribe=0;	var $hardusersubscribenew=0;
var $spamuserdelete=0;
var $spamuserblock=1;
var $spamuserunconfirm=1;
var $spamuserunsusbcribe=1;
var $spamusersubscribe=0;
var $softattemptperiod=1296000;
var $softattemptactive=8;	var $softattemptinactive=4;	
var $logreport=0;
}
class Role_mailbox_preferences {
var $deletemsg='manager';
var $deletestats='manager';
var $identifyemail='manager';
var $maxemails='manager';
var $opentimeout='manager';
var $trashdelmsg='manager';
var $harduserdelete='admin';
var $harduserblock='admin';
var $harduserblockreg='admin';
var $harduserunconfirm='admin';
var $harduserunsubscribe='admin';
var $hardusersubscribe='admin';	var $hardusersubscribenew='admin';
var $spamuserdelete='admin';
var $spamuserblock='admin';
var $spamuserunconfirm='admin';
var $spamuserunsubscribe='admin';
var $spamusersubscribe='admin';
var $softattemptperiod='admin';
var $softattemptactive='admin';
var $softattemptinactive='admin';
var $logreport='admin';
}