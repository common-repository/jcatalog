<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Ticket_Replyfiles_model extends WModel {
	var $_ftype = 'files'; 
	var $_secure = 2; 
	var $_md5 = null; 
	var $_maxSize = ''; 
	var $_format = array(); 
	var $_thumbnail = false; 
	var $_maxHeight = 0; 
	var $_maxWidth = 0; 
	var $_maxTHeight = 100; 
	var $_maxTWidth = 100; 
	function __construct() {
		$formats = str_replace( ' ', '', WPref::load( 'PTICKET_NODE_TKATTACHFORMATS' ) );
		$filid = new stdClass;
		$filid->fileType = 'files';
		$filid->folder = 'media';
		$filid->path = 'attach/tickets';
		$filid->secure = false;
		$filid->format = explode( ',', $formats );
		$filid->maxSize = WPref::load( 'PTICKET_NODE_TKATTACHMAXSIZE' ) * 1024;
		$this->_fileInfo['filid'] = $filid;
		parent::__construct( 'ticket', 'replyfiles', 'filid,tkrid' );
	}
}