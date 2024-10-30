<?php 
/** @copyright Copyright (c) 2007-2017 Joobi. All rights reserved.

* @license GNU GPLv3 */
defined('JOOBI_SECURE') or die('J....');
class Item_Type_model extends WModel {
	var $_fileInfo = array();
	var $_hasPredefined = true;
	function __construct() {
		$previewid= new stdClass;
		$previewid->fileType = 'medias';
		$previewid->folder = 'media';
		$previewid->path = 'itemtype';
		$previewid->secure = false;
		$previewid->maxSize = 500 * 1028;	
		$previewid->thumbnail = 1;	
		$previewid->maxHeight = 50;
		$previewid->maxWidth = 50;
		$previewid->maxTHeight = array( 25 );
		$previewid->maxTWidth = array( 25 );
		$previewid->watermark = false;
		$this->_fileInfo['filid'] = $previewid;
		parent::__construct();
	}
	function validate() {
		if ( !empty($this->namekey) ) {
			$typeM = WModel::get( 'item.type' );
			$typeM->whereE( 'namekey', $this->namekey );
			if ( !empty($this->prodtypid) ) $typeM->where( 'prodtypid', '!=', $this->prodtypid );
			$exit = $typeM->exist();
			if ( $exit ) {
				$this->namekey = $this->genNamekey( '', 64, $this->namekey );
			}
		}
		$topicTypeC = WClass::get( 'item.type' );
		$topicTypeC->resetCacheDesignation();
		return true;
	}
	public function secureTranslation($sid,$eid) {
		$translationC = WClass::get( 'item.translation', null, 'class', false );
		if ( empty($translationC) ) return false;
		if ( !$translationC->secureTranslation( $this, $sid, $eid ) ) return false;
		return true;
	}
}