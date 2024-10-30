<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Comment_Images_model extends WModel {
var $_fileInfo = array();
	function __construct() {
		$filid = new stdClass;
		$filid->fileType = 'images';
		$filid->folder = 'media';
		$filid->path = 'attach/comments';
		$filid->secure = false;
		$filid->format = explode(',','jpg,png,gif,jpeg');
		$filid->maxSize = WPref::load( 'PTICKET_NODE_TKATTACHMAXSIZE' ) * 1024;
		$this->_fileInfo['filid'] = $filid;
		parent::__construct( 'comment', 'images', 'filid,tkid' );
	}}